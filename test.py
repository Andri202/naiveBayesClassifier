from flask import Flask, render_template
from flask_paginate import Pagination, get_page_args
from flaskext.mysql import MySQL


app = Flask(__name__)
app.template_folder = ''
users = list(range(100))
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

def get_users(offset=0, per_page=10):
    
    return select()[offset: offset + per_page]


@app.route('/')
def index():
    page, per_page, offset = get_page_args(page_parameter='page',
                                           per_page_parameter='per_page')
    total = len(select())
    pagination_users = get_users(offset=offset, per_page=per_page)
    pagination = Pagination(page=page, per_page=per_page, total=total,
                            css_framework='bootstrap4')
    return render_template('test.html',
                           users=pagination_users,
                           page=page,
                           per_page=per_page,
                           pagination=pagination,
                           )


if __name__ == '__main__':
    app.run(debug=True)
