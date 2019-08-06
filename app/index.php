<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" href="#">
  <meta charset="UTF-8">
  <title>ModuNUS</title>

  <script src='https://www.google.com/recaptcha/api.js'></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="./style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=B612|Karla:700|Muli|Nunito|Open+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Comfortaa|Maven+Pro&display=swap" rel="stylesheet">


  <style>
    .changed {
      font-size: 12px;
    }

    .bottom {
      display: none;
    }

    .float,
    .my-float {
      display: none;
    }

    .container {
      padding: 0px 0px 150px 250px;
    }

    .filter {
      padding-top: 60px;
    }

    body {
      font-family: 'Nunito', 'Open Sans', Arial, Helvetica, sans-serif;
      padding-top: 60px;
    }

    .column {
      float: left;
      padding: 10px;
    }

    .left {
      width: 78%;
      padding-right: 20px;
      border-right: 0.25px solid gray;
    }

    .right {
      width: 22%;
      padding-left: 20px;
    }

    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .filter-box .fa {
      font-size: 20px;
      cursor: pointer;
      user-select: none;
    }

    #thehr {
      margin-top: 0.1em;
    }

    .navbar {
      background-color: rgb(243, 241, 241);
      background-image: none;
      border: none;
      z-index: 1;
    }

    .navbar .navbar-brand {
      color: lightseagreen;
    }

    .navbar .navbar-brand:hover {
      color: rgb(5, 156, 156);
    }

    #myBtn:hover,
    #myBtn2:hover {
      color: lightslategray;
      cursor: pointer;
    }

    @media screen and (max-width: 1207px) {
      .changed {
        font-size: 18px;
      }

      body {
        font-size: 20px;
      }

      .filter {
        display: none;
      }

      .container {
        padding: 0;
      }

      .column.right {
        display: none;
      }

      .left {
        width: 100%;
        padding-right: 10px;
        border-right: none;
      }

      .bottom {
        display: block;
      }

      .float {
        display: block;
        position: fixed;
        width: 110px;
        height: 110px;
        bottom: 60px;
        right: 80px;
        background-color: #0C9;
        color: #FFF;
        border-radius: 60px;
        text-align: center;
        box-shadow: 3px 3px 4px #999;
      }

      .my-float {
        color: #FFF;
        display: inline-block;
        margin: 35px;
      }

      .my-float2 {
        color: #FFF;
        display: inline-block;
        margin: 7px;
      }

      .modal-dialog {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
      }

      .modal-content {
        height: auto;
        min-height: 100%;
        border-radius: 0;
      }
    }
  </style>
</head>

<body>
  <a href="#" data-toggle='modal' data-target='#modalNavigation' class="float">
    <i class="fa fa-filter my-float" style="font-size: 40px"></i>
  </a>
  <nav class='navbar navbar-inverse navbar-fixed-top'>
    <a class='navbar-brand' href='index.php'><span style="font-family: 'Maven Pro', 'Comfortaa'; font-size: 25px">moduNUS</a>
    <ul class="nav navbar-nav">
      <li><a href="#" id="myBtn" data-toggle="modal" data-target="#myModal">About</a></li>
      <li><a href="#" id="myBtn2" data-toggle="modal" data-target="#modalContactForm">Report Bug</a></li>
    </ul>
  </nav>
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">About</h4>
        </div>
        <div class="modal-body">
          <p><b>Hello, welcome to moduNUS!</b> <i class="far fa-smile-wink"></i></p>
          <p>moduNUS aims to help NUS students decide on which General Education Modules (GEMs) to take by providing
            additional information such as the availability of webcasts for each module. On top of that, moduNUS
            provides
            statistics for each module
            based on reviews given by users on our website, to help other students planning to take the module gain a
            deeper
            understanding of what
            they are in for.</p>
          <p>However, the details that we found for each module (such as the presence of webcasts/group projects) might
            not
            always
            be accurate as they are based on past year iterations of the module, and such details might change overtime.
            In
            addition, some GE modules
            are new this year, and hence we are unable to tell if the module would include group projects in their
            grading
            scheme. For these GEMs, they
            are marked by default to not include group projects. These, however, are in the minority of the modules we
            present here.</p>
          <p>If you would like to contribute to moduNUS to help fellow NUS students, you can leave an anonymous review
            under
            a module you've taken before, or report any errors
            using the tab in the navigation bar should you spot any.</p>
          <p>Thank you and we hope this will be helpful! :)</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="float" data-dismiss="modal"><i class="fa fa-times my-float2" style="font-size: 40px"></i></button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="mailto:modunusadm@gmail.com" method="post" enctype="text/plain">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Write to us</h4>
          </div>
          <div class="modal-body mx-3">
            <div class="md-form mb-5">
              <i class="fas fa-user prefix grey-text"></i>
              <input type="text" id="form34" name="Name" class="form-control validate" required data-bv-notempty-message="Required">
              <label data-error="wrong" data-success="right" for="form34">Your name</label>
            </div>

            <div class="md-form mb-5">
              <i class="fas fa-envelope prefix grey-text"></i>
              <input type="email" id="form29" name="Email Address" class="form-control validate" required data-bv-notempty-message="Required">
              <label data-error="wrong" data-success="right" for="form29">Your email</label>
            </div>

            <div class="md-form mb-5">
              <i class="fas fa-tag prefix grey-text"></i>
              <input type="text" id="form32" name="Subject" class="form-control validate" required data-bv-notempty-message="Required">
              <label data-error="wrong" data-success="right" for="form32">Your subject</label>
            </div>

            <div class="md-form">
              <i class="fa fa-pencil-alt prefix grey-text"></i>
              <textarea type="text" id="form8" name="Message" class="md-textarea form-control" rows="4" required data-bv-notempty-message="Required"></textarea>
              <label data-error="wrong" data-success="right" for="form8">Your message</label>
            </div>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button class="btn btn-unique" type="submit">Send <i class="fa fa-paper-plane"></i></button>
          </div>
          <button type="button" class="float" data-dismiss="modal"><i class="fa fa-times my-float2" style="font-size: 40px"></i></button>
        </form>
      </div>
    </div>
  </div>

  <main ng-app="myApp" ng-cloak>
    <section ng-controller="myCtrl">
      <div class='modal fade' id='modalNavigation' role='dialog' tabindex='-1'>
        <button aria-label='Close' class='close' data-dismiss='modal' type='button'>
        </button>
        <div class='modal-dialog' id="modalNavigation" role="dialog">
          <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Filters</h4>
              </div>
              <div class="modal-body">
                <div style="font-size: 18px">{{filterCount()}} filter(s) selected.<button ng-click="clearFilters()" style="font-size: 18px; color: green; float: right;">Clear all filters</button></div>
                <hr id="thehr" />
                <menu class="filter-box" ng-repeat="cat in categories" ng-init="filter[cat]={}">
                  <button ng-click="toggle = !toggle" ng-init="toggle = false" style="width: 93%; text-align: left">{{capitalise(cat)}}</button><i ng-click="toggle = !toggle" ng-class="toggle ? 'fa fa-angle-down' : 'fa fa-angle-right'" style="float: right"></i>
                  <div class='hr'>
                    <div ng-show="toggle">
                      <md-item ng-repeat="value in getItems(cat, data)" ng-hide="numFiltered(cat,value) === 0">
                        <form class="checkbox">
                          <label><input type="checkbox" ng-model="filter[cat][value]" ng-change="backToFirstPage()">
                            <span class="underline_hover disable-select">{{booleanFunc(cat, value)}}
                              ({{numFiltered(cat, value)}})</span>
                          </label>
                        </form>
                      </md-item>
                    </div>
                  </div>
                  <hr>
                </menu>
                <menu class="filter-box" ng-init="filter['pass/fail']={}">
                  <button ng-click="toggle2 = !toggle2" ng-init="toggle2 = false" style="width: 93%; text-align: left">{{capitalise('pass/fail')}}</button>
                  <i ng-click="toggle2 = !toggle2" ng-class="toggle2 ? 'fa fa-angle-down' : 'fa fa-angle-right'" style="float: right"></i>
                  <div class='hr'>
                    <div ng-show="toggle2">
                      <md-item ng-repeat="value in getItems('pass/fail', data)" ng-hide="numFiltered('pass/fail',value) === 0">
                        <form class="checkbox">
                          <label><input type="checkbox" ng-model="filter['pass/fail'][value]" ng-change="backToFirstPage()">
                            <span class="underline_hover disable-select">{{value === true ? "No" : "Yes"}}
                              ({{numFiltered("pass/fail", value)}})</span>
                          </label>
                        </form>
                      </md-item>
                    </div>
                  </div>
                </menu>
              </div>
              <div class="modal-footer">
              <button type="button" class="float" data-dismiss="modal"><i class="fa fa-times my-float2" style="font-size: 40px"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="filter">
        <h4><b>Filters</b><br></h4>
        <div class="changed">{{filterCount()}} filter(s) selected.<button ng-click="clearFilters()" class="changed" style="color: green; float: right;">Clear all filters</button></div>
        <hr id="thehr" />
        <menu class="filter-box" ng-repeat="cat in categories" ng-init="filter[cat]={}">
          <button ng-click="toggle = !toggle" ng-init="toggle = false" style="width: 93%; text-align: left">{{capitalise(cat)}}</button><i ng-click="toggle = !toggle" ng-class="toggle ? 'fa fa-angle-down' : 'fa fa-angle-right'" style="float: right"></i>
          <div class='hr'>
            <div ng-show="toggle">
              <md-item ng-repeat="value in getItems(cat, data)" ng-hide="numFiltered(cat,value) === 0">
                <form class="checkbox">
                  <label><input type="checkbox" ng-model="filter[cat][value]" ng-change="backToFirstPage()">
                    <span class="underline_hover disable-select">{{booleanFunc(cat, value)}}
                      ({{numFiltered(cat, value)}})</span>
                  </label>
                </form>
              </md-item>
            </div>
          </div>
          <hr>
        </menu>
        <menu class="filter-box" ng-init="filter['pass/fail']={}">
          <button ng-click="toggle2 = !toggle2" ng-init="toggle2 = false" style="width: 93%; text-align: left">{{capitalise('pass/fail')}}</button><i ng-click="toggle2 = !toggle2" ng-class="toggle2 ? 'fa fa-angle-down' : 'fa fa-angle-right'" style="float: right"></i>
          <div class='hr'>
            <div ng-show="toggle2">
              <md-item ng-repeat="value in getItems('pass/fail', data)" ng-hide="numFiltered('pass/fail',value) === 0">
                <form class="checkbox">
                  <label><input type="checkbox" ng-model="filter['pass/fail'][value]" ng-change="backToFirstPage()">
                    <span class="underline_hover disable-select">{{value === true ? "No" : "Yes"}}
                      ({{numFiltered("pass/fail", value)}})</span>
                  </label>
                </form>
              </md-item>
            </div>
          </div>
        </menu>
      </div>
      <div class="container">
        <div class="header_background">
          <form role="form">
            <div class="search">
              <h4><b>Search for GEMs</b></h4>
              <input ng-model="searchText" class="form-control input-lg" id="txt-search" placeholder="Type your GE module code/name" ng-change="backToFirstPage()">
            </div>
          </form>
        </div><br>
        {{filtered.length | number}} module(s) found.<br><span ng-hide="filtered.length === 0">Displaying
          {{rangeCount(page)}} - {{rangeCountEnd(filtered.length)}}<span style="text-align: right; float:right">Page
            {{page}} of {{totalPageNum(filtered.length / 10)}}</span></span>
        <br><br>
        <span class="changed" ng-hide="filterCount() == 0">Filter(s) <span style="color: green;"><i class="fa fa-eraser" title="Clear All" ng-click="clearFilters()"></i></span> :
          <span ng-repeat="(cat, value) in filter">
            <span ng-repeat="(key, val) in value">
              <span ng-show="filter[cat][key] == true">{{capitalise(cat)}} - <span style="color: orangered">{{booleanFunc(cat, key)}}</span> <i class="far fa-times-circle" title="Remove" ng-click="removeFilter(cat, key)"></i>
              </span></span></span>
        </span>
        <div class="changed" ng-hide="bookmarks.length === 0">Bookmark(s) <span style="color: green;"><i class="fa fa-eraser" title="Clear All" ng-click="clearBookmarks()"></i></span> :
          <span ng-repeat="bookmark in bookmarks">
            {{bookmark}} <i class="far fa-times-circle" title="Remove" ng-click="removeBookmark(bookmark)"></i>
          </span>
          <!--bookmark can be given a link to the module info page when url is shortened-->
        </div>
        <p class="moduleinfo" ng-repeat="item in filtered=(data | filter:filterByPropertiesMatchingAND | filter:search)">
          <div dir-paginate="item in filtered|itemsPerPage:10" current-page="page">
            <div class="row">
              <div class="column left">
                <a ng-href="module.php?code={{item.moduleCode}}&title={{item.title | encodeURIComponent}}&depmt={{item.department}}&desc={{item.description | encodeURIComponent}}&webcasts={{item.webcasts}}&exams={{item.exams}}&tutorials={{item.tutorials}}&projects={{item.projects}}&su={{!item.hasOwnProperty('attributes')}}&semester={{semesterFunc(item.semesterData)}}" style="color: #ff4500" class="header">
                  <b>{{item.moduleCode}} - {{item.title}}</b></a><i ng-class="checkBookmark(item.moduleCode) ? 'fa fa-bookmark bottom' : 'far fa-bookmark bottom'" title="Bookmark" style="float: right" ng-click="bookmark(item.moduleCode)"></i><br>
                Category: {{item.department}}<br>
                Semester(s): {{semesterFunc(item.semesterData)}} <br><br>
                {{item.description}}
                <br>
                <br>
                <div class="bottom">
                  <span style='border-radius: 25px; background: lightgreen; padding: 10px'><i class='fa fa-video'></i>
                    Webcasts
                    <i ng-class="item.webcasts ? 'fa fa-check' : 'fa fa-times'"></i></span>
                  <span style='border-radius: 25px; background: lightblue; padding: 10px'><i class='fa fa-book'></i>
                    Exams
                    <i ng-class="item.exams ? 'fa fa-check' : 'fa fa-times'"></i></span>
                  <span style='border-radius: 25px; background: lightsalmon; padding: 10px'><i class='fa fa-comments'></i> Tutorials
                    <i ng-class="item.tutorials ? 'fa fa-check' : 'fa fa-times'"></i></span>
                  <span style='border-radius: 25px; background: lightpink; padding: 10px'><i class='fa fa-users'></i>
                    Group
                    Projects <i ng-class="item.projects ? 'fa fa-check' : 'fa fa-times'"></i></span>
                  <br><br><span style='border-radius: 25px; background: palegoldenrod; padding: 10px'><i class='far fa-smile'></i> Pass/Fail Option
                    <i ng-class="!item.hasOwnProperty('attributes') ? 'fa fa-check' : 'fa fa-times'"></i></span>
                  <br><br>
                </div>
                <a href="https://nusmods.com/modules/{{item.moduleCode}}/{{item.title}}" target="_blank">NUSMods</a> /
                <a href="https://ivle.nus.edu.sg/v1/lms/public/list_course_public.aspx?code={{item.moduleCode}}&title=&lecName=&acadyear=&semester=&ModTitleExact=Y&LecNameExact=N" target="_blank">IVLE</a> / <a href="https://www.google.com/search?q={{item.moduleCode}}" target="_blank">Google</a>
              </div>
              <div class="column right">
                <i ng-class="checkBookmark(item.moduleCode) ? 'fa fa-bookmark' : 'far fa-bookmark'" title="Bookmark" style="float: right" ng-click="bookmark(item.moduleCode)"></i>
                <span style='border-radius: 25px; background: lightgreen; padding: 10px'><i class='fa fa-video'></i>
                  Webcasts
                  <i ng-class="item.webcasts ? 'fa fa-check' : 'fa fa-times'"></i></span><br><br>
                <span style='border-radius: 25px; background: lightblue; padding: 10px'><i class='fa fa-book'></i>
                  Exams
                  <i ng-class="item.exams ? 'fa fa-check' : 'fa fa-times'"></i></span><br><br>
                <span style='border-radius: 25px; background: lightsalmon; padding: 10px'><i class='fa fa-comments'></i> Tutorials
                  <i ng-class="item.tutorials ? 'fa fa-check' : 'fa fa-times'"></i></span><br><br>
                <span style='border-radius: 25px; background: lightpink; padding: 10px'><i class='fa fa-users'></i>
                  Group
                  Projects <i ng-class="item.projects ? 'fa fa-check' : 'fa fa-times'"></i></span><br><br>
                <span style='border-radius: 25px; background: palegoldenrod; padding: 10px'><i class='far fa-smile'></i> Pass/Fail Option
                  <i ng-class="!item.hasOwnProperty('attributes') ? 'fa fa-check' : 'fa fa-times'"></i></span><br><br>
              </div>
            </div>
            <hr>
          </div>
        </p>
        <div style="text-align: center">
          <dir-pagination-controls style="display: inline-block" max-size="10" direction-links="true" boundary-links="true" on-page-change="scroll()">
          </dir-pagination-controls>
        </div>
      </div>
    </section>
    </div>
  </main>
  <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.3.9/angular.min.js'></script>
  <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-animate.min.js'></script>
  <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-aria.min.js'></script>
  <script src='https://ajax.googleapis.com/ajax/libs/angular_material/0.9.4/angular-material.min.js'></script>
  <script src="https://cdn.jsdelivr.net/gh/michaelbromley/angularUtils/src/directives/pagination/dirPagination.js" type="text/javascript"></script>

  <script src="./script.js"></script>
  </mat-sidenav-content>

</body>

</html>
