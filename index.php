<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html ng-app="prueba">
  <head>
    <meta charset="UTF-8">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-sanitize.js"></script>


<!--<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.6.0/angular-route.min.js"></script>-->
<!--<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular-i18n/1.6.0/angular-locale_es.js"></script>-->
<!--<script type="text/javascript" src="https://github.com/720kb/angular-datepicker/blob/master/src/js/angular-datepicker.js"></script>-->

    <script src="js/angular/app.js"></script>
    <script src="js/angular/controller.js"></script>
    <script src="https://aio.sigmamovil.com/library/jquery/jquery-1.11.2.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://aio.sigmamovil.com/library/bootstrap-datetimepicker-0.0.11/build/css/bootstrap-datetimepicker.min.css" />
  
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" media="screen"
     href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
 
          <script type="text/javascript" src="https://aio.sigmamovil.com/library/bootstrap-datetimepicker-0.0.11/src/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="https://aio.sigmamovil.com/library/bootstrap-datetimepicker-0.0.11/src/js/locales/bootstrap-datetimepicker.es.js"></script>
  
  </head>
  <body ng-controller="main">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Fecha de nacimiento</label>

<!--            <div class="well">
  <div id="datetimepicker3" class="input-append">
    <input data-format="hh:mm:ss" type="text"></input>
    <span class="add-on">
      <i data-time-icon="icon-time" data-date-icon="icon-calendar">
      </i>
    </span>
  </div>
</div>-->
              <span class="input-append date  col-sm-8 col-md-8 input-group" id='datetimepicker' style="padding-left: 15px; padding-right: 15px;">
                    <input type="text" id="datesend" name="startdate" class="undeline-input" readonly="" ng-model="startdate" required="required" keep-current-value="" />                    <span class="add-on input-group-addon">
                      <i data-time-icon="glyphicon glyphicon-time" data-date-icon="glyphicon glyphicon-calendar"></i>
                    </span>
                  </span>
            
            <!--<md-datepicker ng-model="data.birdtday"  ng-change="dateselected()" md-placeholder="Enter date"></md-datepicker>-->
<!--            <p class="input-group">
              <input  uib-datepicker-popup="{{format}}"  ng-change="dateselected()" type="text" class="form-control" uib-datepicker-popup="{{format}}" ng-model="data.birdtday" is-open="popup1.opened" datepicker-options="dateOptions" ng-required="true" close-text="Close" alt-input-formats="altInputFormats" />
              <span class="input-group-btn">
                <button type="button" class="btn btn-default" ng-click="open1()"><i class="glyphicon glyphicon-calendar"></i></button>
              </span>
            </p>-->
                <!--<input ng-model="data.birdtday" type="date"   ng-change="dateselected()" class="form-control" id="exampleInputEmail1" placeholder="Email">-->
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Tipo de documento</label>
            <select class="form-control">
              <option ng-repeat="key in typeDocument" value="{{key.id}}">{{key.name}}</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre" ng-pattern="/^[a-zA-Z]*$/">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Primer apellido</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre" ng-pattern="/^[a-zA-Z]*$/">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Segundo apellido</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre" ng-pattern="/^[a-zA-Z]*$/">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Ciudad</label>
            <input type="text" class="form-control" maxlength="80" id="exampleInputEmail1" placeholder="Nombre" ng-pattern="/^[a-zA-Z]*$/">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Nombre de acudiente</label>
            <input type="text" ng-disabled="flag" class="form-control" maxlength="80" id="exampleInputEmail1" placeholder="Nombre" ng-pattern="/^[a-zA-Z]*$/">
          </div>

          <div class="form-group">
            <label for="exampleInputEmail1">Tipo de especialidad</label>
            <input type="text" class="form-control" maxlength="80" id="exampleInputEmail1" placeholder="Nombre" ng-pattern="/^[a-zA-Z]*$/">
          </div>

          <button type="submit" class="btn btn-default">Submit</button>
        </form>
      </div>
    </div>
    <script src="js/ui-bootstrap-tpls-2.5.0.min.js"></script>
    <script type="text/javascript"
     src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
     src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
     src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>
    <script type="text/javascript">
    
    </script>
  </body>
</html>
