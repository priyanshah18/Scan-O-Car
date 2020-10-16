

from flask import Flask, render_template

import scan_o_car

number = scan_o_car.getnumber()


app = Flask(__name__)


@app.route('/')
def index():
    return render_template("number.html", data=number)


if __name__ == '__main__':
    app.run(debug=True)
