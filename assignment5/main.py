from flask import Flask,  request, escape, render_template

app = Flask(_name_)

@app.route('/')
def index():
    return render_template('login.html')


if _name_ == '_main_':
    app.run()
