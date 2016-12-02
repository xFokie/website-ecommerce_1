var express = require('express');
var router = express.Router();
var csrf = require('csurf');
var passport = require('passport');

var sessionCheck = require('./session-check');

var csrfProtection = csrf();
router.use(csrfProtection);

router.get('/', , function(req, res, next) {

	var messages = req.flash('error');
	res.render('login', {csrfToken: req.csrfToken(), messages: messages});
});

module.exports = router;