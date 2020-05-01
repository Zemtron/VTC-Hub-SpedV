<?php
session_start();
if(!isset($_SESSION['username'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}
 
//Abfrage der Nutzer ID vom Login
//$userid = $_SESSION['userid'];
 
//
?>

<!--
=========================================================
* Material Dashboard Dark Edition - v2.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard-dark
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Material Dashboard Dark Edition by Creative Tim
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="../assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">

      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
         VTC-Hub
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="./dashboard.php">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" href="./convoy.php">
              <i class="material-icons">content_paste</i>
              <p>Convoys</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="./truckersmp.php">
              <i class="material-icons">library_books</i>
              <p>TruckersMP Stats</p>
            </a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="./niederlassung.php">
              <i class="material-icons">bubble_chart</i>
              <p>Niederlassung</p>
            </a>
          </li>
          
    
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-default btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">0</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            
       
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                   <i class="material-icons">euro</i></i>
                  </div>
                  <p class="card-category">Speditionskonto</p>
                  <h3 class="card-title"><div id="api"></div>
                                                    <section></section>
                                                    <script>
                                                    function getThem(selHeader, selSection/*, url*/) {
            function populateHeader(jsonObj) {
                var myH1 = document.createElement('h1');
                myH1.textContent = jsonObj['squadName'];
                header.appendChild(myH1);
                var myPara = document.createElement('p');
                myPara.textContent = '' + jsonObj.result[0].Money
                header.appendChild(myPara);
            }
            var header = document.querySelector(selHeader);
            var section = document.querySelector(selSection);
            // var requestURL = url;
            var request = new XMLHttpRequest();
            // Anstatt die API direkt zu lesen, rufen wir ein
            // PHP-Skript auf dem eigenen Server auf
            //request.open('GET', requestURL);
            request.open('GET', 'getdata/getspedmoney.php');
            request.responseType = 'json';
            request.send();
            request.onload = function () {
                var superHeroes = request.response;
                populateHeader(superHeroes);
                // showHeroes(superHeroes);
            }
        }
        getThem('#api', 'section'/*, 'apikeyhier'*/)
    </script></h1>
                 
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-warning"></i>
                    <a href="#pablo" class="warning-link"></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">monetization_on</i>
                  </div>
                  <p class="card-category">Speditionskonto</p>
                  <h3 class="card-title"><div id="api1"></div>
                                                    <section></section>
                                                    <script>
                                                    function getThem(selHeader, selSection/*, url*/) {
            function populateHeader(jsonObj) {
                var myH1 = document.createElement('h1');
                myH1.textContent = jsonObj['squadName'];
                header.appendChild(myH1);
                var myPara = document.createElement('p');
                myPara.textContent = '' + jsonObj.result[1].Money
                header.appendChild(myPara);
            }
            var header = document.querySelector(selHeader);
            var section = document.querySelector(selSection);
            // var requestURL = url;
            var request = new XMLHttpRequest();
            // Anstatt die API direkt zu lesen, rufen wir ein
            // PHP-Skript auf dem eigenen Server auf
            //request.open('GET', requestURL);
            request.open('GET', 'getdata/getspedmoney.php');
            request.responseType = 'json';
            request.send();
            request.onload = function () {
                var superHeroes = request.response;
                populateHeader(superHeroes);
                // showHeroes(superHeroes);
            }
        }
        getThem('#api1', 'section'/*, 'apikeyhier'*/)
    </script></h1>
                                                            
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons"></i> 
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">insert_invitation</i>
                  </div>
                  <p class="card-category">Speditionsziel</p>
                  <h3 class="card-title"><div id="api2"></div>
                                                    <section></section>
                                                    <script>
                                                    function getThem(selHeader, selSection/*, url*/) {
            function populateHeader(jsonObj) {
                var myH1 = document.createElement('h1');
                myH1.textContent = jsonObj['squadName'];
                header.appendChild(myH1);
                var myPara = document.createElement('p');
                myPara.textContent = '' + jsonObj.result[0].Moneyamount
                header.appendChild(myPara);
            }
            var header = document.querySelector(selHeader);
            var section = document.querySelector(selSection);
            // var requestURL = url;
            var request = new XMLHttpRequest();
            // Anstatt die API direkt zu lesen, rufen wir ein
            // PHP-Skript auf dem eigenen Server auf
            //request.open('GET', requestURL);
            request.open('GET', 'getdata/getspedtargets.php');
            request.responseType = 'json';
            request.send();
            request.onload = function () {
                var superHeroes = request.response;
                populateHeader(superHeroes);
                // showHeroes(superHeroes);
            }
        }
        getThem('#api2', 'section'/*, 'apikeyhier'*/)
    </script></h1>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons"></i>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">format_line_spacing</i>
                  </div>
                  <p class="card-category">Gefahrene Auftr&auml;ge</p>
                  <h3 class="card-title"><div id="api3"></div>
                                                    <section></section>
                                                    <script>
                                                    function getThem(selHeader, selSection/*, url*/) {
            function populateHeader(jsonObj) {
                var myH1 = document.createElement('h1');
                myH1.textContent = jsonObj['squadName'];
                header.appendChild(myH1);
                var myPara = document.createElement('p');
                myPara.textContent = '' + jsonObj.result.drivenTasks
                header.appendChild(myPara);
            }
            var header = document.querySelector(selHeader);
            var section = document.querySelector(selSection);
            // var requestURL = url;
            var request = new XMLHttpRequest();
            // Anstatt die API direkt zu lesen, rufen wir ein
            // PHP-Skript auf dem eigenen Server auf
            //request.open('GET', requestURL);
            request.open('GET', 'getdata/getspedstats.php');
            request.responseType = 'json';
            request.send();
            request.onload = function () {
                var superHeroes = request.response;
                populateHeader(superHeroes);
                // showHeroes(superHeroes);
            }
        }
        getThem('#api3', 'section'/*, 'apikeyhier'*/)
    </script></h1>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons"></i> 
                  </div>
                </div>
              </div>
            </div>
          </div>
                                 <div class="row"></div>
                            <div class="card-deck-wrapper">
                                <div class="card-deck">
                                
                              <div class="card mb-4">
                                <div class="card-header">
                                  <b><p class="text-muted">TruckersMP Stats</p></b>
                                </div>
                                <div class="card-body">
                                  <table class="table">
                                   <thead>
                                      <tr>
                                        <th colspan="4">Server: Simulation 1</th>
                                     </tr></thead>
                                      <tbody  id="table1">   
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                              <div class="card mb-4">
                                <div class="card-header">
                                  <b><p class="text-muted">TruckersMP Stats</p></b>
                                </div>
                                <div class="card-body">
                                  <table class="table">
                                   <thead>
                                      <tr>
                                        <th colspan="4">Server: Simulation 2</th>
                                      </tr></thead>
                                      <tbody id="table2">   
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                     
                               
                              <div class="card mb-4">
                                <div class="card-header">
                                  <b><p class="text-muted">TruckersMP Stats</p></b>
                                </div>
                                <div class="card-body">
                                  <table class="table">
                                   <thead>
                                      <tr>
                                        <th colspan="4">Server: [US] Simulation</th>
                                      </tr></thead>
                                      <tbody id="table3">   
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                    
                              <div class="card mb-4">
                                <div class="card-header">
                                  <b><p class="text-muted">TruckersMP Stats</p></b>
                                </div>
                                <div class="card-body">
                                  <table class="table">
                                   <thead>
                                      <tr>
                                        <th colspan="4">Server: Arcade</th>
                                      </tr></thead>
                                      <tbody id="table4">   
                                    </tbody>
                                  </table>
                                </div>
                              </div>
                    
                              
                    
                    
                              
                               
                              <script>
                         
                         function getThem(id, url, a) {
                      var request = new XMLHttpRequest();
                      request.open("GET", url);
                      request.responseType = "json";
                      request.send();
                      request.onload = function() {
                        var jsonObj = request.response;
                        var tbody = document.querySelector(id);
                        var tr = document.createElement("tr");
                        arra = [
                          jsonObj.response[a].name,
                          jsonObj.response[a].severity,
                          jsonObj.response[a].players
                        ];
                        for (p = 0; p < arra.length; p++) {
                          var td = document.createElement("td");
                          
                          if (p == arra.length - 1) {
                            td.style.color = jsonObj.response[a].color;
                          }
                          td.textContent = arra[p];
                          tr.appendChild(td);
                        }
                        tbody.appendChild(tr);
                      };
                    }
                    const tableApis = [
                      "https://api.truckyapp.com/v2/traffic/top?server=sim1&game=ets2",
                      "https://api.truckyapp.com/v2/traffic/top?server=sim2&game=ets2",
                      "https://api.truckyapp.com/v2/traffic/top?server=arc2&game=ets2",
                      "https://api.truckyapp.com/v2/traffic/top?server=arc1&game=ets2"
                    ];
                    for (let table = 0; table < 4; ++table) {
                      for (let a = 0; a < 6; a++) {
                        getThem("#table" + (table + 1), tableApis[table], a);
                      }
                    }
                          
                  
                          
                    </script>
                    
                 
                    </div>
                    
                   
                                <div class="card mb-4">
                                <div class="card-header">
                                  <b><p class="text-muted">SpedV Stats</b>
                                </div>
                                <div class="card-body">
                                  <table class="table">
                                   <thead>
                                      <tr>
                                        <th colspan="4"><font color="green">Online </font>User</th>
                                      </tr>
                                      <tbody id="table10">
                                        
                                        
                                        
                    
                    
                    
                                                    <section></section>
                                                    <script>
                                                    function getThem(selHeader, selSection/*, url*/) {
            function populateHeader(jsonObj) {
                var myH1 = document.createElement('h1');
                myH1.textContent = jsonObj['squadName'];
                header.appendChild(myH1);
                var myPara = document.createElement('p');
                myPara.textContent = '' + jsonObj.result[0][0].Value.UserName
                header.appendChild(myPara);
            }
            var header = document.querySelector(selHeader);
            var section = document.querySelector(selSection);
            // var requestURL = url;
            var request = new XMLHttpRequest();
            // Anstatt die API direkt zu lesen, rufen wir ein
            // PHP-Skript auf dem eigenen Server auf
            //request.open('GET', requestURL);
            request.open('GET', 'getdata/getonlineusers.php');
            request.responseType = 'json';
            request.send();
            request.onload = function () {
                var superHeroes = request.response;
                populateHeader(superHeroes);
                // showHeroes(superHeroes);
            }
        }
        getThem('#table10', 'section'/*, 'apikeyhier'*/)
    </script>
                               <section></section>
                                                    <script>
                                                    function getThem(selHeader, selSection/*, url*/) {
            function populateHeader(jsonObj) {
                var myH1 = document.createElement('h1');
                myH1.textContent = jsonObj['squadName'];
                header.appendChild(myH1);
                var myPara = document.createElement('p');
                myPara.textContent = '' + jsonObj.result[1][0].Value.UserName
                header.appendChild(myPara);
            }
            var header = document.querySelector(selHeader);
            var section = document.querySelector(selSection);
            // var requestURL = url;
            var request = new XMLHttpRequest();
            // Anstatt die API direkt zu lesen, rufen wir ein
            // PHP-Skript auf dem eigenen Server auf
            //request.open('GET', requestURL);
            request.open('GET', 'getdata/getonlineusers.php');
            request.responseType = 'json';
            request.send();
            request.onload = function () {
                var superHeroes = request.response;
                populateHeader(superHeroes);
                // showHeroes(superHeroes);
            }
        }
        getThem('#table10', 'section'/*, 'apikeyhier'*/)
    </script>
                                  
                                  </tbody>
                                  </table>
                  
                                </div>
                              </div>
                              <section></section>
                                                    <script>
                                                    function getThem(selHeader, selSection/*, url*/) {
            function populateHeader(jsonObj) {
                var myH1 = document.createElement('h1');
                myH1.textContent = jsonObj['squadName'];
                header.appendChild(myH1);
                var myPara = document.createElement('p');
                myPara.textContent = '' + jsonObj.result[2][0].Value.UserName
                header.appendChild(myPara);
            }
            var header = document.querySelector(selHeader);
            var section = document.querySelector(selSection);
            // var requestURL = url;
            var request = new XMLHttpRequest();
            // Anstatt die API direkt zu lesen, rufen wir ein
            // PHP-Skript auf dem eigenen Server auf
            //request.open('GET', requestURL);
            request.open('GET', 'getdata/getonlineusers.php');
            request.responseType = 'json';
            request.send();
            request.onload = function () {
                var superHeroes = request.response;
                populateHeader(superHeroes);
                // showHeroes(superHeroes);
            }
        }
        getThem('#table10', 'section'/*, 'apikeyhier'*/)
    </script>
                                  
                                  </tbody>
                                  </table>
                  
                                </div>
                              </div>
                              <section></section>
                                                    <script>
                                                    function getThem(selHeader, selSection/*, url*/) {
            function populateHeader(jsonObj) {
                var myH1 = document.createElement('h1');
                myH1.textContent = jsonObj['squadName'];
                header.appendChild(myH1);
                var myPara = document.createElement('p');
                myPara.textContent = '' + jsonObj.result[3][0].Value.UserName
                header.appendChild(myPara);
            }
            var header = document.querySelector(selHeader);
            var section = document.querySelector(selSection);
            // var requestURL = url;
            var request = new XMLHttpRequest();
            // Anstatt die API direkt zu lesen, rufen wir ein
            // PHP-Skript auf dem eigenen Server auf
            //request.open('GET', requestURL);
            request.open('GET', 'getdata/getonlineusers.php');
            request.responseType = 'json';
            request.send();
            request.onload = function () {
                var superHeroes = request.response;
                populateHeader(superHeroes);
                // showHeroes(superHeroes);
            }
        }
        getThem('#table10', 'section'/*, 'apikeyhier'*/)
    </script>
                                  
                                  </tbody>
                                  </table>
                  
                                </div>
                              </div>
                              <section></section>
                                                    <script>
                                                    function getThem(selHeader, selSection/*, url*/) {
            function populateHeader(jsonObj) {
                var myH1 = document.createElement('h1');
                myH1.textContent = jsonObj['squadName'];
                header.appendChild(myH1);
                var myPara = document.createElement('p');
                myPara.textContent = '' + jsonObj.result[4][0].Value.UserName
                header.appendChild(myPara);
            }
            var header = document.querySelector(selHeader);
            var section = document.querySelector(selSection);
            // var requestURL = url;
            var request = new XMLHttpRequest();
            // Anstatt die API direkt zu lesen, rufen wir ein
            // PHP-Skript auf dem eigenen Server auf
            //request.open('GET', requestURL);
            request.open('GET', 'getdata/getonlineusers.php');
            request.responseType = 'json';
            request.send();
            request.onload = function () {
                var superHeroes = request.response;
                populateHeader(superHeroes);
                // showHeroes(superHeroes);
            }
        }
        getThem('#table10', 'section'/*, 'apikeyhier'*/)
    </script>
                                  
                                  </tbody>
                                  </table>
                  
                                </div>
                              </div>
                             <section></section>
                                                    <script>
                                                    function getThem(selHeader, selSection/*, url*/) {
            function populateHeader(jsonObj) {
                var myH1 = document.createElement('h1');
                myH1.textContent = jsonObj['squadName'];
                header.appendChild(myH1);
                var myPara = document.createElement('p');
                myPara.textContent = '' + jsonObj.result[5][0].Value.UserName
                header.appendChild(myPara);
            }
            var header = document.querySelector(selHeader);
            var section = document.querySelector(selSection);
            // var requestURL = url;
            var request = new XMLHttpRequest();
            // Anstatt die API direkt zu lesen, rufen wir ein
            // PHP-Skript auf dem eigenen Server auf
            //request.open('GET', requestURL);
            request.open('GET', 'getdata/getonlineusers.php');
            request.responseType = 'json';
            request.send();
            request.onload = function () {
                var superHeroes = request.response;
                populateHeader(superHeroes);
                // showHeroes(superHeroes);
            }
        }
        getThem('#table10', 'section'/*, 'apikeyhier'*/)
    </script>
                                  
                                  </tbody>
                                  </table>
                  
                                </div>
                              </div>
                              <section></section>
                                                    <script>
                                                    function getThem(selHeader, selSection/*, url*/) {
            function populateHeader(jsonObj) {
                var myH1 = document.createElement('h1');
                myH1.textContent = jsonObj['squadName'];
                header.appendChild(myH1);
                var myPara = document.createElement('p');
                myPara.textContent = '' + jsonObj.result[6][0].Value.UserName
                header.appendChild(myPara);
            }
            var header = document.querySelector(selHeader);
            var section = document.querySelector(selSection);
            // var requestURL = url;
            var request = new XMLHttpRequest();
            // Anstatt die API direkt zu lesen, rufen wir ein
            // PHP-Skript auf dem eigenen Server auf
            //request.open('GET', requestURL);
            request.open('GET', 'getdata/getonlineusers.php');
            request.responseType = 'json';
            request.send();
            request.onload = function () {
                var superHeroes = request.response;
                populateHeader(superHeroes);
                // showHeroes(superHeroes);
            }
        }
        getThem('#table10', 'section'/*, 'apikeyhier'*/)
    </script>
                                  
                                  </tbody>
                                  </table>
                  
                                </div>
                              </div>
                            <section></section>
                                                    <script>
                                                    function getThem(selHeader, selSection/*, url*/) {
            function populateHeader(jsonObj) {
                var myH1 = document.createElement('h1');
                myH1.textContent = jsonObj['squadName'];
                header.appendChild(myH1);
                var myPara = document.createElement('p');
                myPara.textContent = '' + jsonObj.result[7][0].Value.UserName
                header.appendChild(myPara);
            }
            var header = document.querySelector(selHeader);
            var section = document.querySelector(selSection);
            // var requestURL = url;
            var request = new XMLHttpRequest();
            // Anstatt die API direkt zu lesen, rufen wir ein
            // PHP-Skript auf dem eigenen Server auf
            //request.open('GET', requestURL);
            request.open('GET', 'getdata/getonlineusers.php');
            request.responseType = 'json';
            request.send();
            request.onload = function () {
                var superHeroes = request.response;
                populateHeader(superHeroes);
                // showHeroes(superHeroes);
            }
        }
        getThem('#table10', 'section'/*, 'apikeyhier'*/)
    </script>
                                  
                                  </tbody>
                                  </table>
                  
                                </div>
                              </div>
                            <section></section>
                                                    <script>
                                                    function getThem(selHeader, selSection/*, url*/) {
            function populateHeader(jsonObj) {
                var myH1 = document.createElement('h1');
                myH1.textContent = jsonObj['squadName'];
                header.appendChild(myH1);
                var myPara = document.createElement('p');
                myPara.textContent = '' + jsonObj.result[8][0].Value.UserName
                header.appendChild(myPara);
            }
            var header = document.querySelector(selHeader);
            var section = document.querySelector(selSection);
            // var requestURL = url;
            var request = new XMLHttpRequest();
            // Anstatt die API direkt zu lesen, rufen wir ein
            // PHP-Skript auf dem eigenen Server auf
            //request.open('GET', requestURL);
            request.open('GET', 'getdata/getonlineusers.php');
            request.responseType = 'json';
            request.send();
            request.onload = function () {
                var superHeroes = request.response;
                populateHeader(superHeroes);
                // showHeroes(superHeroes);
            }
        }
        getThem('#table10', 'section'/*, 'apikeyhier'*/)
    </script>
                        
                        </tbody>
                        </table>
        
                      </div>
                    </div>
                    <section></section>
                                                    <script>
                                                    function getThem(selHeader, selSection/*, url*/) {
            function populateHeader(jsonObj) {
                var myH1 = document.createElement('h1');
                myH1.textContent = jsonObj['squadName'];
                header.appendChild(myH1);
                var myPara = document.createElement('p');
                myPara.textContent = '' + jsonObj.result[9][0].Value.UserName
                header.appendChild(myPara);
            }
            var header = document.querySelector(selHeader);
            var section = document.querySelector(selSection);
            // var requestURL = url;
            var request = new XMLHttpRequest();
            // Anstatt die API direkt zu lesen, rufen wir ein
            // PHP-Skript auf dem eigenen Server auf
            //request.open('GET', requestURL);
            request.open('GET', 'getdata/getonlineusers.php');
            request.responseType = 'json';
            request.send();
            request.onload = function () {
                var superHeroes = request.response;
                populateHeader(superHeroes);
                // showHeroes(superHeroes);
            }
        }
        getThem('#table10', 'section'/*, 'apikeyhier'*/)
    </script>
              
              </tbody>
              </table>
             <section></section>
                                                    <script>
                                                    function getThem(selHeader, selSection/*, url*/) {
            function populateHeader(jsonObj) {
                var myH1 = document.createElement('h1');
                myH1.textContent = jsonObj['squadName'];
                header.appendChild(myH1);
                var myPara = document.createElement('p');
                myPara.textContent = '' + jsonObj.result[10][0].Value.UserName
                header.appendChild(myPara);
            }
            var header = document.querySelector(selHeader);
            var section = document.querySelector(selSection);
            // var requestURL = url;
            var request = new XMLHttpRequest();
            // Anstatt die API direkt zu lesen, rufen wir ein
            // PHP-Skript auf dem eigenen Server auf
            //request.open('GET', requestURL);
            request.open('GET', 'getdata/getonlineusers.php');
            request.responseType = 'json';
            request.send();
            request.onload = function () {
                var superHeroes = request.response;
                populateHeader(superHeroes);
                // showHeroes(superHeroes);
            }
        }
        getThem('#table10', 'section'/*, 'apikeyhier'*/)
    </script>
        
        </tbody>
        </table>
                  
                                </div>
                              </div>
                          
                                                     
              
      <footer class="footer">
        <div class="container-fluid">
 
          <div class="copyright float-right" id="date">
            , made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
      <script>
        const x = new Date().getFullYear();
        let date = document.getElementById('date');
        date.innerHTML = '&copy; ' + x + date.innerHTML;
      </script>
    </div>
  </div>
 
     
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="https://unpkg.com/default-passive-events"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>