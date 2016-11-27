var express = require('express');
var router = express.Router();

/* GET users listing. */
router.get('/', function(req, res, next) {
	res.render('test', {title: "Kappa", message: "GET SHR3KT M8"});
});

module.exports = router;
