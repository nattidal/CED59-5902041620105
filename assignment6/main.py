from flask import Flask,render_template
app = Flask(_name_)

@app.route("/")
def member():
    return render_template('login.html')

if _name_ == "_main_":
    app.run(debug=True)
