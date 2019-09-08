from flask import Flask, render_template, request
from flaskext.mysql import MySQL
from collections import Counter
import csv
from Sastrawi.StopWordRemover.StopWordRemoverFactory import StopWordRemoverFactory
from flask_paginate import Pagination, get_page_args

app = Flask(__name__)

app.config['MYSQL_DATABASE_HOST'] = 'localhost'
app.config['MYSQL_DATABASE_USER'] = 'root'
app.config['MYSQL_DATABASE_PASSWORD'] = ''
app.config['MYSQL_DATABASE_DB'] = 'spam_app'

mysql = MySQL()
mysql.init_app(app)

def select():
    conn = mysql.connect()
    cursor = conn.cursor()
    cursor.execute("SELECT * FROM dataset")
    data = cursor.fetchall()
    return data

def get_data(offset=0, per_page=10):
    
    return select()[offset: offset + per_page]

@app.route('/', methods=['GET', 'POST'])
@app.route('/index', methods=['GET', 'POST'])
def index():
    namaFile = "dataset_sms_spam _v1.csv"
    data = []
    label = []
 
    reader = select()
    for row in reader:
            
        factory = StopWordRemoverFactory()
        stopwords = factory.create_stop_word_remover()
        katadasar = stopwords.remove(row[1])
        label.append(row[2])
        data.append(katadasar)
    
    #random urutan dan split ke data training dan test
    from sklearn.model_selection import train_test_split
    X_train, X_test, y_train, y_test  = train_test_split( data, label, test_size=0.2, random_state=123)
     
    print("Data training:")
    print(len(X_train))
    print(Counter(y_train))
     
    print("Data testing:")
    print(len(X_test))
    print(Counter(y_test))

    #transform ke tfidf dan train dengan naive bayes
    from sklearn.pipeline import Pipeline
    from sklearn.feature_extraction.text import CountVectorizer
    from sklearn.feature_extraction.text import TfidfTransformer
    from sklearn.naive_bayes import MultinomialNB

    text_clf = Pipeline([('vect', CountVectorizer()),
                         ('tfidf', TfidfTransformer()),
                          ('clf', MultinomialNB())])

    text_clf.fit(X_train, y_train) #method for teaching classifier
    dno = format(len(data))
    if request.method == "POST":
        details = request.form
        text_sms = []
        text_sms.append(details['text_sms'])
        pred = text_clf.predict(text_sms)
        result = format(pred)
            
        return render_template('index.php', dno=dno, result=result)

    return render_template('index.php', dno=dno)

@app.route('/dataset',methods=['POST','GET'])
def dataset():
    page, per_page, offset = get_page_args(page_parameter='page',
                                           per_page_parameter='per_page')
    total = len(select())
    pagination_users = get_data(offset=offset, per_page=per_page)
    pagination = Pagination(page=page, per_page=per_page, total=total,
                            css_framework='bootstrap4')
    return render_template('dataset.php',
                           data=pagination_users,
                           page=page,
                           per_page=per_page,
                           pagination=pagination,
                           )

if __name__ == '__main__':
    app.run()
