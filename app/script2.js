const mysql = require('mysql');

const con = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "",
    database: "nus"
});

function upvoting(currentNum, code, postDate, postTime) {
    con.connect(function (err) {
        if (err) throw err;
        var sql = "UPDATE data SET upvote =" + currentNum + 1 + "WHERE module =" + code + "AND postingDate =" + postDate + "AND postingTime =" + postTime;
        con.query(sql, function (err, result) {
            if (err) throw err;
            console.log(result.affectedRows + " record(s) updated");
        });
    });
}
