@extends('admin.layouts.master')

@section('content')

    <div class="row">

        <div class="col-lg-12">

            <h1>{{ trans('quickadmin::templates.templates-view_edit-patient-last-dializ') }}</h1>

            <br/>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>اطلاعات بیمار</h3>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="form-group col-lg-3">
                            <div class="col-sm-7">
                                <h4>
                                    شماره پرونده :
                                </h4>
                            </div>
                            <div class="col-sm-5">
                                <h5> {{ $patient->unitNumber }}</h5>
                            </div>
                        </div>
                        <div class="form-group col-lg-3">
                            <div class="col-sm-7">
                                <h4>
                                    نام و نام خانوادگی :
                                </h4>
                            </div>
                            <div class="col-sm-5">
                                <h5>{{ $patient->name . " " . $patient->family }}</h5>
                            </div>
                        </div>
                        <div class="form-group col-lg-2">
                            <div class="col-sm-6">
                                <h4>
                                    نام پدر :
                                </h4>
                            </div>
                            <div class="col-sm-6">
                                <h5>{{ $patient->fatherName }} </h5>
                            </div>
                        </div>

                        <div class="form-group col-lg-3">
                            <div class="col-sm-6">
                                <h4>
                                    وضعیت ازدواج :
                                </h4>
                            </div>
                            <div class="col-sm-6">
                                <h5>{{ $patient->maritalStatus->title }}</h5>
                            </div>
                        </div>

                    </div>

                    <div class="row">


                        <div class="form-group col-lg-3">
                            <div class="col-sm-6">
                                <h4>
                                    تاریخ تولد :
                                </h4>
                            </div>
                            <div class="col-sm-6">
                                <h5> {{ $patient->dateOfBirth }}</h5>
                            </div>
                        </div>
                        <div class="form-group col-lg-2">
                            <div class="col-sm-6">
                                <h4>
                                    تلفن :
                                </h4>
                            </div>
                            <div class="col-sm-6">
                                <h5> {{ $patient->phoneNumber }}</h5>
                            </div>
                        </div>
                        <div class="form-group col-lg-7">
                            <div class="col-sm-2">
                                <h4>
                                    آدرس :
                                </h4>
                            </div>
                            <div class="col-sm-10">
                                <h5>{{ $patient->address }}</h5>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <div class="row">
                <div class="col-lg-4">

                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3>اطلاعات دیالیز</h3>
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-lg-6 h4"><b>UF Time Hour : </b></div>
                                <div class="col-lg-6 h5">4 hour</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 h4"><b>UF Time Min : </b></div>
                                <div class="col-lg-6 h5">2 hour</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 h4"><b>UF Goal /ml : </b></div>
                                <div class="col-lg-6 h5">2500 میلی لیتر</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 h4"><b>UF Profile : </b></div>
                                <div class="col-lg-6 h5">Profile 1</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 h4"><b>Dialyser Type : </b></div>
                                <div class="col-lg-6 h5">normal</div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 h4"><b>Target Temp : </b></div>
                                <div class="col-lg-6 h5">34</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 h4"><b>Base Na : </b></div>
                                <div class="col-lg-6 h5">140</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 h4"><b>Bicarbonate : </b></div>
                                <div class="col-lg-6 h5">32</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 h4"><b>SVS Profile : </b></div>
                                <div class="col-lg-6 h5">Linear</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 h4"><b>Heparin : </b></div>
                                <div class="col-lg-6 h5">On</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 h4"><b>ISO Time Hour : </b></div>
                                <div class="col-lg-6 h5">1 hour</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 h4"><b>ISO Time Min : </b></div>
                                <div class="col-lg-6 h5">40 min</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 h4"><b>ISO Goal : </b></div>
                                <div class="col-lg-6 h5">1.5 میلی لیتر</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 h4"><b>Air Sensitivity : </b></div>
                                <div class="col-lg-6 h5">85</div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 h4"><b>TMP Max : </b></div>
                                <div class="col-lg-6 h5">32</div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-lg-4">

                    <div class="panel panel-default">
                        <div class="panel-heading"><b>Dialysis Flow</b></div>
                        <div class="panel-body">
                            <div id="dialysisFlow" dir="ltr" style="width: 100% ; height: 250px; margin: 0 auto"></div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"><b>Venus Pressure</b></div>
                        <div class="panel-body">
                            <div id="VENPres" dir="ltr" style="width: 100% ; height: 250px; margin: 0 auto"></div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">

                    <div class="panel panel-default">
                        <div class="panel-heading"><b>DUF Removed</b></div>
                        <div class="panel-body">
                            <div id="dufRemoved" dir="ltr" style="width: 100% ; height: 250px; margin: 0 auto"></div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4">
                    <div class="panel panel-default">
                        <div class="panel-heading"><b>DLSO Removed</b></div>
                        <div class="panel-body">
                            <div id="dlsoRemoved" dir="ltr" style="width: 100% ; height: 250px; margin: 0 auto"></div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">

                <div class="panel panel-default">
                    <div class="panel-heading"><b>مقادیر دیالیز در بازه زمان</b></div>
                    <div class="panel-body">

                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <th>Time</th>
                                <th>Syring Size</th>
                                <th>Heparin Rate</th>
                                <th>Heparin BV</th>
                                <th>Blood Pump Spd</th>
                                <th>Temp Limit Low</th>
                                <th>Temp Limit High</th>
                                <th>Cond Limit Low</th>
                                <th>Cond Limit High</th>
                                <th>Venus Range</th>
                                <th>Venus Limit High</th>
                                <th>Heap Hr</th>
                                <th>Sodium</th>
                                <th>D KTV</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>12</td>
                                <td>13</td>
                                <td>54</td>
                                <td>64</td>
                                <td>12</td>
                                <td>15</td>
                                <td>98</td>
                                <td>190</td>
                                <td>13</td>
                                <td>45</td>
                                <td>40</td>
                                <td>23</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>12</td>
                                <td>13</td>
                                <td>54</td>
                                <td>64</td>
                                <td>12</td>
                                <td>15</td>
                                <td>98</td>
                                <td>190</td>
                                <td>13</td>
                                <td>45</td>
                                <td>40</td>
                                <td>23</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>12</td>
                                <td>13</td>
                                <td>54</td>
                                <td>64</td>
                                <td>12</td>
                                <td>15</td>
                                <td>98</td>
                                <td>190</td>
                                <td>13</td>
                                <td>45</td>
                                <td>40</td>
                                <td>23</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>12</td>
                                <td>13</td>
                                <td>54</td>
                                <td>64</td>
                                <td>12</td>
                                <td>15</td>
                                <td>98</td>
                                <td>190</td>
                                <td>13</td>
                                <td>45</td>
                                <td>40</td>
                                <td>23</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>12</td>
                                <td>13</td>
                                <td>54</td>
                                <td>64</td>
                                <td>12</td>
                                <td>15</td>
                                <td>98</td>
                                <td>190</td>
                                <td>13</td>
                                <td>45</td>
                                <td>40</td>
                                <td>23</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>12</td>
                                <td>13</td>
                                <td>54</td>
                                <td>64</td>
                                <td>12</td>
                                <td>15</td>
                                <td>98</td>
                                <td>190</td>
                                <td>13</td>
                                <td>45</td>
                                <td>40</td>
                                <td>23</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>12</td>
                                <td>13</td>
                                <td>54</td>
                                <td>64</td>
                                <td>12</td>
                                <td>15</td>
                                <td>98</td>
                                <td>190</td>
                                <td>13</td>
                                <td>45</td>
                                <td>40</td>
                                <td>23</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>12</td>
                                <td>13</td>
                                <td>54</td>
                                <td>64</td>
                                <td>12</td>
                                <td>15</td>
                                <td>98</td>
                                <td>190</td>
                                <td>13</td>
                                <td>45</td>
                                <td>40</td>
                                <td>23</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>12</td>
                                <td>13</td>
                                <td>54</td>
                                <td>64</td>
                                <td>12</td>
                                <td>15</td>
                                <td>98</td>
                                <td>190</td>
                                <td>13</td>
                                <td>45</td>
                                <td>40</td>
                                <td>23</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>12</td>
                                <td>13</td>
                                <td>54</td>
                                <td>64</td>
                                <td>12</td>
                                <td>15</td>
                                <td>98</td>
                                <td>190</td>
                                <td>13</td>
                                <td>45</td>
                                <td>40</td>
                                <td>23</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>54</td>
                                <td>64</td>
                                <td>12</td>
                                <td>15</td>
                                <td>98</td>
                                <td>190</td>
                                <td>13</td>
                                <td>45</td>
                                <td>40</td>
                                <td>23</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>12</td>
                                <td>13</td>
                                <td>54</td>
                                <td>64</td>
                                <td>12</td>
                                <td>15</td>
                                <td>98</td>
                                <td>190</td>
                                <td>13</td>
                                <td>45</td>
                                <td>40</td>
                                <td>23</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>12</td>
                                <td>13</td>
                                <td>54</td>
                                <td>64</td>
                                <td>12</td>
                                <td>15</td>
                                <td>98</td>
                                <td>190</td>
                                <td>13</td>
                                <td>45</td>
                                <td>40</td>
                                <td>23</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>12</td>
                                <td>13</td>
                                <td>54</td>
                                <td>64</td>
                                <td>12</td>
                                <td>15</td>
                                <td>98</td>
                                <td>190</td>
                                <td>13</td>
                                <td>45</td>
                                <td>40</td>
                                <td>23</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>12</td>
                                <td>13</td>
                                <td>54</td>
                                <td>64</td>
                                <td>12</td>
                                <td>15</td>
                                <td>98</td>
                                <td>190</td>
                                <td>13</td>
                                <td>45</td>
                                <td>40</td>
                                <td>23</td>
                                <td>12</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>


            </div>

        </div>

    </div>

@endsection