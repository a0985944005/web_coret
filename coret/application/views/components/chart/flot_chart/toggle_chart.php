<div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Toggle Chart
                        <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                        </header>
                        <div class="panel-body">
                            <div id="toggle-chart">
                                <div class="clearfix">
                                    <form class="form-horizontal pull-left chart-control">
                                        <div class="control-group">
                                            <label class="control-label">Chart Type :</label>
                                            <div class="series-list">
                                                <label class="checkbox inline">
                                                    <input id="chartType1" checked name="ct" type="radio" value="line"/>
                                                    Line Chart</label>
                                                <label class="checkbox inline">
                                                    <input id="chartType2" name="ct" type="radio" value="bar"/>
                                                    Bar Chart </label>
                                            </div>
                                        </div>
                                    </form>
                                    <form class="form-horizontal chart-control pull-right chart-control">
                                        <div class="control-group ">
                                            <label class="control-label"> Toggle series :</label>
                                            <div class="series-list">
                                                <label class="checkbox inline">
                                                    <input type="checkbox" id="cbdata1" checked>
                                                    data1</label>
                                                <label class="checkbox inline">
                                                    <input type="checkbox" id="cbdata2" checked>
                                                    data2 </label>
                                                <label class="checkbox inline">
                                                    <input type="checkbox" id="cbdata3" checked>
                                                    data3 </label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div id="legendPlaceholder20">
                                </div>
                                <div id="toggle-chartContainer" style="width: 100%;height:300px; text-align: left;">
                                </div>
                        </div>
                            </div>
                    </section>
                </div>
            </div>


<div class="target-sell" style="display:none;"></div>

<!--Morris Chart-->
<script src="application/views/components/chart/flot_chart/flot-chart/jquery.flot.js"></script>
<script src="application/views/components/chart/flot_chart/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="application/views/components/chart/flot_chart/flot-chart/jquery.flot.resize.js"></script>
<script src="application/views/components/chart/flot_chart/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="application/views/components/chart/flot_chart/flot-chart/jquery.flot.selection.js"></script>
<script src="application/views/components/chart/flot_chart/flot-chart/jquery.flot.stack.js"></script>
<script src="application/views/components/chart/flot_chart/flot-chart/jquery.flot.time.js"></script>

<!--資料-->
<script src="application/views/components/chart/flot_chart/data/toggle_chart.js"></script>
