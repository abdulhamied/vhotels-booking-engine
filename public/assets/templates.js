/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			exports: {},
/******/ 			id: moduleId,
/******/ 			loaded: false
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.loaded = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(0);
/******/ })
/************************************************************************/
/******/ ({

/***/ 0:
/***/ function(module, exports, __webpack_require__) {

	__webpack_require__(162);
	__webpack_require__(163);

/***/ },

/***/ 162:
/***/ function(module, exports) {

	var angular=window.angular,ngModule;
	try {ngModule=angular.module(["ng"])}
	catch(e){ngModule=angular.module("ng",[])}
	var v1="<div class=\"footer\"> <div> <strong>Hotel Space | </strong> Online Travel Booking System &copy; 2016 </div> </div>";
	var id1="footer-wrapper.tpl";
	ngModule.run(["$templateCache",function(c){c.put(id1,v1)}]);
	module.exports=v1;

/***/ },

/***/ 163:
/***/ function(module, exports) {

	var angular=window.angular,ngModule;
	try {ngModule=angular.module(["ng"])}
	catch(e){ngModule=angular.module("ng",[])}
	var v1="<div class=\"wrapper wrapper-content\"> <div class=\"row\"> <div class=\"col-lg-3\"> <div class=\"ibox float-e-margins\"> <div class=\"ibox-title\"> <span class=\"label label-success pull-right\">Monthly</span> <h5>Bookings</h5> </div> <div class=\"ibox-content\"> <h1 class=\"no-margins\">10</h1> <small>Count</small> </div> </div> </div> <div class=\"col-lg-3\"> <div class=\"ibox float-e-margins\"> <div class=\"ibox-title\"> <span class=\"label label-success pull-right\">Monthly</span> <h5>Bookings</h5> </div> <div class=\"ibox-content\"> <h1 class=\"no-margins\">$20,000</h1> <small>Total</small> </div> </div> </div> <div class=\"col-lg-3\"> <div class=\"ibox float-e-margins\"> <div class=\"ibox-title\"> <span class=\"label label-primary pull-right\">Yearly</span> <h5>Bookings</h5> </div> <div class=\"ibox-content\"> <h1 class=\"no-margins\">106,120</h1> <small>Count</small> </div> </div> </div> <div class=\"col-lg-3\"> <div class=\"ibox float-e-margins\"> <div class=\"ibox-title\"> <span class=\"label label-primary pull-right\">Yearly</span> <h5>Bookings</h5> </div> <div class=\"ibox-content\"> <h1 class=\"no-margins\">$106,120</h1> <small>Amount</small> </div> </div> </div> </div> <div class=\"row\"> <div class=\"col-lg-4\"> <div class=\"ibox float-e-margins\"> <div class=\"ibox-title\"> <h5>Messages</h5> <div ibox-tools></div> </div> <div class=\"ibox-content ibox-heading\"> <h3><i class=\"fa fa-envelope-o\"></i> New messages</h3> <small><i class=\"fa fa-tim\"></i> You have 22 new messages and 16 waiting in draft folder.</small> </div> <div class=\"ibox-content\"> <div class=\"feed-activity-list\"> <div class=\"feed-element\"> <div> <small class=\"pull-right text-navy\">1m ago</small>\n<strong>Monica Smith</strong> <div>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum</div> <small class=\"text-muted\">Today 5:60 pm - 12.06.2014</small> </div> </div> <div class=\"feed-element\"> <div> <small class=\"pull-right\">2m ago</small>\n<strong>Jogn Angel</strong> <div>There are many variations of passages of Lorem Ipsum available</div> <small class=\"text-muted\">Today 2:23 pm - 11.06.2014</small> </div> </div> <div class=\"feed-element\"> <div> <small class=\"pull-right\">5m ago</small>\n<strong>Jesica Ocean</strong> <div>Contrary to popular belief, Lorem Ipsum</div> <small class=\"text-muted\">Today 1:00 pm - 08.06.2014</small> </div> </div> <div class=\"feed-element\"> <div> <small class=\"pull-right\">5m ago</small>\n<strong>Monica Jackson</strong> <div>The generated Lorem Ipsum is therefore</div> <small class=\"text-muted\">Yesterday 8:48 pm - 10.06.2014</small> </div> </div> <div class=\"feed-element\"> <div> <small class=\"pull-right\">5m ago</small>\n<strong>Anna Legend</strong> <div>All the Lorem Ipsum generators on the Internet tend to repeat</div> <small class=\"text-muted\">Yesterday 8:48 pm - 10.06.2014</small> </div> </div> <div class=\"feed-element\"> <div> <small class=\"pull-right\">5m ago</small>\n<strong>Damian Nowak</strong> <div>The standard chunk of Lorem Ipsum used</div> <small class=\"text-muted\">Yesterday 8:48 pm - 10.06.2014</small> </div> </div> <div class=\"feed-element\"> <div> <small class=\"pull-right\">5m ago</small>\n<strong>Gary Smith</strong> <div>200 Latin words, combined with a handful</div> <small class=\"text-muted\">Yesterday 8:48 pm - 10.06.2014</small> </div> </div> </div> </div> </div> </div> <div class=\"col-lg-8\"> <div class=\"row\"> <div class=\"col-lg-6\"> <div class=\"ibox float-e-margins\"> <div class=\"ibox-title\"> <h5>Bookings</h5> <div ibox-tools></div> </div> <div class=\"ibox-content\"> <table class=\"table table-hover no-margins\"> <thead> <tr> <th>Status</th> <th>Date</th> <th>User</th> <th>Value</th> </tr> </thead> <tbody> <tr> <td> <small>Pending...</small> </td> <td><i class=\"fa fa-clock-o\"></i> 11:20pm</td> <td>Samantha</td> <td class=\"text-navy\"><i class=\"fa fa-level-up\"></i> 24%</td> </tr> <tr> <td><span class=\"label label-warning\">Canceled</span></td> <td><i class=\"fa fa-clock-o\"></i> 10:40am</td> <td>Monica</td> <td class=\"text-navy\"><i class=\"fa fa-level-up\"></i> 66%</td> </tr> <tr> <td> <small>Pending...</small> </td> <td><i class=\"fa fa-clock-o\"></i> 01:30pm</td> <td>John</td> <td class=\"text-navy\"><i class=\"fa fa-level-up\"></i> 54%</td> </tr> <tr> <td> <small>Pending...</small> </td> <td><i class=\"fa fa-clock-o\"></i> 02:20pm</td> <td>Agnes</td> <td class=\"text-navy\"><i class=\"fa fa-level-up\"></i> 12%</td> </tr> <tr> <td><span class=\"label label-primary\">Completed</span></td> <td><i class=\"fa fa-clock-o\"></i> 04:10am</td> <td>Amelia</td> <td class=\"text-navy\"><i class=\"fa fa-level-up\"></i> 66%</td> </tr> <tr> <td> <small>Pending...</small> </td> <td><i class=\"fa fa-clock-o\"></i> 12:08am</td> <td>Damian</td> <td class=\"text-navy\"><i class=\"fa fa-level-up\"></i> 23%</td> </tr> </tbody> </table> </div> </div> </div> <div class=\"col-lg-6\"> <div class=\"ibox\"> <div class=\"ibox-title\"> <h5>Small todo list</h5> <div ibox-tools></div> </div> <div class=\"ibox-content\"> <ul class=\"todo-list m-t small-list\"> <li> <checkbox ng-model=\"main.checkOne\"></checkbox> <span class=\"m-l-xs\">Buy a milk</span> </li> <li> <checkbox ng-model=\"check1\"></checkbox> <span class=\"m-l-xs\">Go to shop and find some products.</span> </li> <li> <checkbox ng-model=\"check2\"></checkbox> <span class=\"m-l-xs\">Send documents to Mike</span>\n<small class=\"label label-primary\"><i class=\"fa fa-clock-o\"></i> 1 mins</small> </li> <li> <checkbox ng-model=\"main.checkTwo\"></checkbox> <span class=\"m-l-xs\">Go to the doctor dr Smith</span> </li> <li> <checkbox ng-model=\"check4\"></checkbox> <span class=\"m-l-xs\">Plan vacation</span> </li> <li> <checkbox ng-model=\"check5\"></checkbox> <span class=\"m-l-xs\">Create new stuff</span> </li> <li> <checkbox ng-model=\"check6\"></checkbox> <span class=\"m-l-xs\">Call to Anna for dinner</span> </li> </ul> </div> </div> </div> </div> <div class=\"row\"> <div class=\"col-lg-12\"> <div class=\"ibox float-e-margins\"> <div class=\"ibox-title\"> <h5>Transactions worldwide</h5> <div ibox-tools></div> </div> <div class=\"ibox-content\"> <div class=\"row\"> <div class=\"col-lg-6\"> <table class=\"table table-hover margin bottom\"> <thead> <tr> <th style=\"width: 1%\" class=\"text-center\">No.</th> <th>Transaction</th> <th class=\"text-center\">Date</th> <th class=\"text-center\">Amount</th> </tr> </thead> <tbody> <tr> <td class=\"text-center\">1</td> <td> Security doors </td> <td class=\"text-center small\">16 Jun 2014</td> <td class=\"text-center\"><span class=\"label label-primary\">$483.00</span></td> </tr> <tr> <td class=\"text-center\">2</td> <td> Wardrobes </td> <td class=\"text-center small\">10 Jun 2014</td> <td class=\"text-center\"><span class=\"label label-primary\">$327.00</span></td> </tr> <tr> <td class=\"text-center\">3</td> <td> Set of tools </td> <td class=\"text-center small\">12 Jun 2014</td> <td class=\"text-center\"><span class=\"label label-warning\">$125.00</span></td> </tr> <tr> <td class=\"text-center\">4</td> <td> Panoramic pictures</td> <td class=\"text-center small\">22 Jun 2013</td> <td class=\"text-center\"><span class=\"label label-primary\">$344.00</span></td> </tr> <tr> <td class=\"text-center\">5</td> <td>Phones</td> <td class=\"text-center small\">24 Jun 2013</td> <td class=\"text-center\"><span class=\"label label-primary\">$235.00</span></td> </tr> <tr> <td class=\"text-center\">6</td> <td>Monitors</td> <td class=\"text-center small\">26 Jun 2013</td> <td class=\"text-center\"><span class=\"label label-primary\">$100.00</span></td> </tr> </tbody> </table> </div> <div class=\"col-lg-6\" ng-controller=\"dashboardMap as map\"> <div vector-map style=\"height: 300px\" my-map-data=\"map.data\"></div> </div> </div> </div> </div> </div> </div> </div> </div> </div>";
	var id1="home.tpl";
	ngModule.run(["$templateCache",function(c){c.put(id1,v1)}]);
	module.exports=v1;

/***/ }

/******/ });
//# sourceMappingURL=templates.js.map