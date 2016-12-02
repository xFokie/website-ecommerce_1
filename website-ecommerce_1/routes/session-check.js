var express = require('express');
var router = express.Router();

router.get('/', function(req, res, next){
	req.logout();
	res.redirect('/');
});

function isLoggedIn(req, res, next){
	if(req.isAuthenticated()){
		return next();
	}
	res.redirect('/');
}

function notLoggedIn(req, res, next){
	if(!req.isAuthenticated()){
		return next();
	}
	res.redirect('/');
}

module.exports = router;
module.exports.isLoggedIn = isLoggedIn;
module.exports.notLoggedIn = notLoggedIn;