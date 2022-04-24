<script>
    window.onload = function() {
        function updateLanes() {
            const tspans = document.getElementsByTagName('tspan');

            const regexp = /reqDestStatus-(FL\d{3}):LANE_FULL:\s+(\d+)/;
            const lanes = {};
            
            for(tspan of tspans) {
                const match = tspan.textContent.match(regexp);

                if(match && match.length === 3) {
                    lanes[match[1]] = match[2];
                }
            }

            const xhttp = new XMLHttpRequest();

            const qs = new URLSearchParams(lanes);

            xhttp.open('GET', 'http://localhost/recirc/update_lanes.php?' + qs);
            xhttp.send();

            setTimeout(updateLanes, 60000);
        }

        updateLanes();
    };
</script>
<html><head>
      <link rel="stylesheet" media="screen" href="/stylesheets/yui_rollup.css?v=1643632266">
      <link rel="stylesheet" media="screen" href="/stylesheets/detail.css?v=1643632266">
      <script type="text/javascript" src="/javascripts/lib/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
    window.REGION_IS_AIR_GAPPED = false;
    window.REGION_IS_ROUNDTABLE = false;
    window.REGION_IS_AIRGAPPED_AND_NOT_ROUNDTABLE = false
    window.REGIONS = [ 'af-south-1','ap-east-1','ap-northeast-1','ap-northeast-2','ap-northeast-3','ap-south-1','ap-southeast-1','ap-southeast-2','ap-southeast-3','ca-central-1','cn-amazon','cn-north-1','cn-northwest-1','eu-central-1','eu-north-1','eu-south-1','eu-west-1','eu-west-2','eu-west-3','in-amazon-1','me-south-1','sa-east-1','us-east-1','us-east-2','us-gov-east-1','us-gov-west-1','us-seattle','us-titan','us-west-1','us-west-2' ];
    window.SNOWFORTED_REGIONS = [ 'ap-northeast-2','eu-central-1' ];
    window.FEATURES = {"CARNAVAL":true,"MWS_REDIRECT":true,"SEARCH":true,"GROUP_AUTHZ":false};
</script>
    <script src="//internal-cdn.amazon.com/is-it-down.amazon.com/javascripts/stripe.min.js?v="></script>
    <link rel="stylesheet" media="screen" href="//internal-cdn.amazon.com/is-it-down.amazon.com/stylesheets/stripe.css?v=">

<script src="/javascripts/amcharts/js/core.js?v=1643632266"></script>
<script src="/javascripts/amcharts/js/charts.js?v=1643632266"></script>
<script src="/javascripts/amcharts/js/animated.js?v=1643632266"></script>
<script src="/javascripts/amcharts/js/chartConfigs/commonConfig.js?v=1643632266"></script>
<script src="/javascripts/amcharts/js/chartConfigs/barConfig.js?v=1643632266"></script>
<script src="/javascripts/amcharts/js/chartConfigs/pieConfig.js?v=1643632266"></script>
<script src="/javascripts/amcharts/js/chartConfigs/zoomerConfig.js?v=1643632266"></script>
<script src="/javascripts/common.js?v=1643632266"></script>
<script src="/javascripts/jquery.metadata.js?v=1643632266"></script>
      <script type="text/javascript" src="/javascripts/lib/jquery/plugins/cookie/1.0/jquery.cookie.min.js"></script>
      <link rel="icon" href="/images/favicon.ico">
          <title>FL Recirc by Lane</title>
    <script type="text/javascript">
        var tinyDomain = "tiny.amazon.com";
    </script>
    
    <script src="/javascripts/yui_rollup.js?v=1643632266"></script>
    <script src="/javascripts/jquery_blockUI.js?v=1643632266"></script>
    <script src="/javascripts/jquery_select.js?v=1643632266"></script>
    <script src="/javascripts/jquery.throttle-debounce.js?v=1643632266"></script>
    <script src="/javascripts/metric_schema.js?v=1643632266"></script>
    <script src="/javascripts/rsh.compressed.js?v=1643632266"></script>
    <script src="/javascripts/detail.js?v=1643632266"></script>
    <script src="/javascripts/igraph.js?v=1643632266"></script>
    <script src="/javascripts/fleegix_date.js?v=1643632266"></script>
    <script src="/javascripts/lib/json/json2.min.js?v=1643632266"></script>
    <script src="/javascripts/lib/jquery/ui/1.7/ui.core.min.js?v=1643632266"></script>
    <script src="/javascripts/lib/jquery/ui/1.7/ui.datepicker.min.js?v=1643632266"></script>
    <script src="/javascripts/lib/jquery/plugins/jsonp/jquery-jsonp.min.js?v=1643632266"></script>
    <script src="/javascripts/lib/clipboard/clipboard.min.js?v=1643632266"></script>

    <script src="/javascripts/amcharts/flash/drawJSCharts.js?v=1643632266"></script>
    <script src="/javascripts/amcharts/flash/swfobject.js?v=1643632266"></script>

    <script type="text/javascript" src="/javascripts/lib/jquery/plugins/cookie/1.0/jquery.cookie.min.js"></script>

<script src="/javascripts/yui_rollup.js?v=1643632266"></script>
<script src="/javascripts/jquery_blockUI.js?v=1643632266"></script>
<script src="/javascripts/jquery_select.js?v=1643632266"></script>
<script src="/javascripts/metric_schema.js?v=1643632266"></script>
<script src="/javascripts/rsh.compressed.js?v=1643632266"></script>
<script src="/javascripts/detail.js?v=1643632266"></script>
<script src="/javascripts/igraph.js?v=1643632266"></script>
<script src="/javascripts/fleegix_date.js?v=1643632266"></script>
<script src="/javascripts/lib/json/json2.min.js?v=1643632266"></script>
<script src="/javascripts/lib/jquery/ui/1.7/ui.core.min.js?v=1643632266"></script>
<script src="/javascripts/lib/jquery/ui/1.7/ui.datepicker.min.js?v=1643632266"></script>
<script src="/javascripts/lib/jquery/plugins/jsonp/jquery-jsonp.min.js?v=1643632266"></script>

<script src="/javascripts/amcharts/flash/drawJSCharts.js?v=1643632266"></script>
<script src="/javascripts/amcharts/flash/swfobject.js?v=1643632266"></script>

<link rel="stylesheet" media="screen" href="/stylesheets/font-awesome.css?v=1643632266">
<link rel="stylesheet" media="screen" href="/stylesheets/igraph.css?v=1643632266">
<link rel="stylesheet" media="screen" href="/javascripts/lib/jquery/ui/1.7/themes/base/ui.all.min.css?v=">
<link rel="stylesheet" media="screen" href="/javascripts/lib/jquery/ui/1.7/themes/base/ui.datepicker.min.css?v=">
<link rel="stylesheet" media="screen" href="/javascripts/lib/opentip/opentip.css?v=">


    <script type="text/javascript">
      // Initialization for Really Simple History, only works with window.onload()
      window.dhtmlHistory.create({
        toJSON: function(o) {
          return JSON.stringify(o);
        }
        , fromJSON: function(s) {
          return JSON.parse(s);
        }
      });

      // Do JS setup of iGraph page when DOM is ready
      $(document).ready(function() {
        MP.IgraphPage.init();
        dhtmlHistory.initialize();
        dhtmlHistory.addListener(MP.History._listener);
      });
    </script><script src="chrome-extension://bkbighdlgofgdhcjnhocalbkiehhpdei/patchingutil.js" id="patching-util-aea-browser-extension"></script><script src="chrome-extension://bkbighdlgofgdhcjnhocalbkiehhpdei/openid.xhr.js" id="aea-openid-xhr-patch"></script></head><body id="monitor-amazon-com" class="yui-skin-sam"><div id="actionMenu" class="yui-module yui-overlay yuimenu yui-overlay-hidden" style="z-index: 2; position: absolute; visibility: hidden;"><div class="bd"><ul class="first-of-type"><li class="yuimenuitem first-of-type" id="yui-gen6" groupindex="0" index="0"><a href="#" class="yuimenuitemlabel"><span class="title">Graph</span></a></li><li class="yuimenuitem" id="yui-gen7" groupindex="0" index="1"><a href="#" class="yuimenuitemlabel"><span class="item">Selected Rows</span> </a></li><li class="yuimenuitem" id="yui-gen8" groupindex="0" index="2"><a href="#" class="yuimenuitemlabel"><span class="item">All Rows</span></a></li><li class="yuimenuitem" id="yui-gen9" groupindex="0" index="3"><a href="#" class="yuimenuitemlabel"><span class="item">Search Pattern</span></a></li></ul><ul><li class="yuimenuitem first-of-type" id="yui-gen10" groupindex="1" index="0"><a href="#" class="yuimenuitemlabel"><span class="title">Add to Graph</span></a></li><li class="yuimenuitem" id="yui-gen11" groupindex="1" index="1"><a href="#" class="yuimenuitemlabel"><span class="item">Selected Rows</span> </a></li><li class="yuimenuitem" id="yui-gen12" groupindex="1" index="2"><a href="#" class="yuimenuitemlabel"><span class="item">All Rows</span></a></li><li class="yuimenuitem" id="yui-gen13" groupindex="1" index="3"><a href="#" class="yuimenuitemlabel"><span class="item">Search Pattern</span></a></li></ul><ul><li class="yuimenuitem first-of-type" id="yui-gen14" groupindex="2" index="0"><a href="#" class="yuimenuitemlabel">Configure...</a></li></ul></div></div><iframe id="_yuiResizeMonitor" title="Text Resize Monitor" style="position: absolute; visibility: visible; width: 2em; height: 2em; top: -27px; left: 0px; border-width: 0px;"></iframe><span class="yui-resize-status"></span><span class="yui-resize-status"></span><span class="yui-resize-status"></span><form id="rshStorageForm" style="left:-1000px;top:-1000px;width:1px;height:1px;border:0;position:absolute;"><textarea id="rshStorageField" style="left:-1000px;top:-1000px;width:1px;height:1px;border:0;position:absolute;"></textarea></form>

    
    
      <div id="doc2" class="yui-t5">
        <div id="bar">
          <h1 id="masthead"><a href="/"><span>Monitor</span> Portal</a></h1>
        <div class="user">
          <a class="feedback" target="_blank" href="https://w.amazon.com/index.php/Monitoring/Contact">Contact-Us</a>
          <a class="help" target="_new" href="https://w.amazon.com?Monitoring/Documentation">Help</a>
        </div> <!-- end user -->

<span class="hidden username">saubrent</span>
<div>
  <div id="headersearch">
    <form action="/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓"> 
      <input type="text" name="query" id="query"> 
</form>  </div>
</div>
<div class="clear"></div>
        </div>
        <div id="motd" class="" style="display: block;"></div>
        <div id="searchresult-main" class="container">
          
<!-- iGraph + metric search page -->
<div class="iGraphContainer">
      <div class="sectionHeader igraphTabHeader" id="igraphTabHeader">
        <table><tbody><tr>
          <td width="99%" class="sectionHeaderTitle" onclick="MP.SectionHelper.toggleSectionVisibility('igraphTab');">
            <span class="expanderGrow expander"></span>iGraph - Interactive Search and Graph
          </td>
          <td class="headerRight">      <ul class="globalFeatureContainer">
          <li>
            <a class="resetLayout" href="#" title="Reset visibility of controls and height of graph">Reset Layout</a>
          </li>
          <li>      <select id="reloadEvery" onchange="return MP.ReloadHandler.changed()">
        <option value="0">Reload ...</option>
        <option value="1">1 minute</option>
        <option value="2">2 minutes</option>
        <option value="5">5 minutes</option>
        <option value="10">10 minutes</option>
        <option value="15">15 minutes</option>
        <option value="20">20 minutes</option>
        <option value="30">30 minutes</option>
        <option value="0">Cancel</option>
      </select>
</li>
          <li>
              <input type="checkbox" name="autoSubmitGraph" id="autoSubmitGraph" value="1" checked="checked">
              <label for="autoSubmitGraph" title="Controls whether edits are automatically submitted">Auto Submit</label>
          </li>
          <li class="linkToThisPageClass"><a id="linkToThisGraph" href="/igraph?SchemaName1=Search&amp;Pattern1=marketplace%3D%24TEB9-MainSorterController%24%20req%20FL%20%3ALane%20schemaname%3DService%20NOT%20methodname%3D%24ALL%24%20NOT%20NON_OPERATIONAL&amp;Period1=OneMinute&amp;Stat1=n&amp;HeightInPixels=250&amp;WidthInPixels=600&amp;GraphTitle=FL%20Recirc%20by%20Lane&amp;DecoratePoints=true&amp;GraphType=pie&amp;TZ=America%2FNew_York@TZ%3A%20New%20York&amp;StartTime1=-PT2M&amp;EndTime1=-PT0H">Link to this graph</a>
              <em>[</em><a id="linkToThisGraphTiny" href="https://tiny.amazon.com/submit/url?comment=iGraph&amp;name=https%3A//monitorportal.amazon.com/igraph%3FSchemaName1%3DSearch%26Pattern1%3Dmarketplace%253D%2524TEB9-MainSorterController%2524%2520req%2520FL%2520%253ALane%2520schemaname%253DService%2520NOT%2520methodname%253D%2524ALL%2524%2520NOT%2520NON_OPERATIONAL%26Period1%3DOneMinute%26Stat1%3Dn%26HeightInPixels%3D250%26WidthInPixels%3D600%26GraphTitle%3DFL%2520Recirc%2520by%2520Lane%26DecoratePoints%3Dtrue%26GraphType%3Dpie%26TZ%3DAmerica%252FNew_York@TZ%253A%2520New%2520York%26StartTime1%3D-PT2M%26EndTime1%3D-PT0H" target="_blank">tiny</a><em>]</em></li>
          <li class="helpLink"><span class="helpIcon" title="Display help for iGraph page (opens in a new window)" onclick="window.open('https://w.amazon.com?Monitoring/Documentation/MonitoringPortal/iGraph')"></span></li>

      </ul>
</td>
        </tr></tbody></table>
      </div>

<div id="igraphTab" style="width: 723px;">
    <div id="igraphTabContent">
        <div id="graph" style="width: 325px;">
            <table cellspacing="0"><tbody><tr><td>
                <div id="graphImgContainer" class="graphImgResize yui-resize" style="height: 200px; width: 285px;">
                    <div id="graphImgWrapper" class="graphImgResize hidden" style="height: 200px; display: block; width: 285px;">
                        <img id="graphImg" class="graphImgResize" title="Zoom in: Left-Click. Zoom out: Right-click. Re-center: Shift-Left-Click. Latest Data: Ctrl-Left-Click. Browser's Image Context Menu: Ctrl-Right-Click." style="height: 196px; width: 285px; display: none;">
                    <div id="chartdiv" style="width: 285px; height: 196px; visibility: visible;"><div style="width: 100%; height: 100%; position: relative;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs><clipPath id="id-45"><rect width="285" height="196"></rect></clipPath><clipPath id="id-67"></clipPath><filter id="filter-id-50" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-72" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs><g class="MP-Sprite-group MP-Container-group"><g class="MP-Sprite-group MP-Rectangle-group" fill="#ffffff" fill-opacity="0"><rect class="MP-Rectangle" width="285" height="196"></rect></g><g class="MP-Container"><g class="MP-Sprite-group MP-Container-group MP-Component-group MP-Chart-group MP-SerialChart-group MP-PercentChart-group MP-PieChart-group MP-pieChart" role="region" clip-path="url(&quot;#id-45&quot;)" opacity="1" aria-describedby="id-22-description"><g class="MP-Sprite-group MP-Rectangle-group" fill="#ffffff"><rect class="MP-Rectangle" width="285" height="196"></rect></g><g class="MP-Container MP-Component MP-Chart MP-SerialChart MP-PercentChart MP-PieChart"><g class="MP-Sprite-group MP-Container-group MP-Label-group" fill="#000000" id="id-63" font-weight="600" font-size="16" transform="translate(73.5,0)"><g class="MP-Container MP-Label" style="user-select: none;"><text x="0" y="18" dy="-4.86"><tspan>FL Recirc by Lane</tspan></text></g></g><g class="MP-Sprite-group MP-Container-group" transform="translate(0,18)"><g class="MP-Container"><g class="MP-Sprite-group MP-Container-group"><g class="MP-Container"><g class="MP-Sprite-group MP-Container-group" transform="translate(142.5,89)"><g class="MP-Container"><g class="MP-Sprite-group MP-Container-group MP-Component-group MP-Series-group MP-PercentSeries-group MP-PieSeries-group" role="list" aria-describedby="id-64-description"><g class="MP-Container MP-Component MP-Series MP-PercentSeries MP-PieSeries"><g class="MP-Sprite-group MP-Container-group" clip-path="url(&quot;#id-67&quot;)"><g class="MP-Container"></g></g><g class="MP-Sprite-group"></g><g class="MP-Sprite-group MP-Container-group"><g class="MP-Container"><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#0000ff" role="listitem" stroke="#0000ff"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#00ff00" role="listitem" stroke="#00ff00"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#ff00ff" role="listitem" stroke="#ff00ff"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#00e0e0" role="listitem" stroke="#00e0e0"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#ffc000" role="listitem" stroke="#ffc000"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#ff0000" role="listitem" stroke="#ff0000"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#b24de8" role="listitem" stroke="#b24de8"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#808080" role="listitem" stroke="#808080"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#00b200" role="listitem" stroke="#00b200"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#b200b2" role="listitem" stroke="#b200b2"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#00b2b2" role="listitem" stroke="#00b2b2"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#b28600" role="listitem" stroke="#b28600"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#b20000" role="listitem" stroke="#b20000"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#b3b306" role="listitem" stroke="#b3b306"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#000000" role="listitem" stroke="#000000"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#007c00" role="listitem" stroke="#007c00"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#800780" role="listitem" stroke="#800780"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#007c7c" role="listitem" stroke="#007c7c"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#7c5d00" role="listitem" stroke="#7c5d00"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#ffafaf" role="listitem" stroke="#ffafaf"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#e0e000" role="listitem" stroke="#e0e000"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#00ff00" role="listitem" stroke="#00ff00"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#00e0e0" role="listitem" stroke="#00e0e0"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#ffc000" role="listitem" stroke="#ffc000"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#ff0000" role="listitem" stroke="#ff0000"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#b24de8" role="listitem" stroke="#b24de8"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#808080" role="listitem" stroke="#808080"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#00b200" role="listitem" stroke="#00b200"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#b200b2" role="listitem" stroke="#b200b2"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#00b2b2" role="listitem" stroke="#00b2b2"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#b28600" role="listitem" stroke="#b28600"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#b3b306" role="listitem" stroke="#b3b306"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#000000" role="listitem" stroke="#000000"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#007c00" role="listitem" stroke="#007c00"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#800780" role="listitem" stroke="#800780"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#007c7c" role="listitem" stroke="#007c7c"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#7c5d00" role="listitem" stroke="#7c5d00"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#ffafaf" role="listitem" stroke="#ffafaf"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#e0e000" role="listitem" stroke="#e0e000"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#00ff00" role="listitem" stroke="#00ff00"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#ff00ff" role="listitem" stroke="#ff00ff"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#00e0e0" role="listitem" stroke="#00e0e0"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#ffc000" role="listitem" stroke="#ffc000"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#b24de8" role="listitem" stroke="#b24de8"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#808080" role="listitem" stroke="#808080"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#00b200" role="listitem" stroke="#00b200"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#b200b2" role="listitem" stroke="#b200b2"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#00b2b2" role="listitem" stroke="#00b2b2"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#b28600" role="listitem" stroke="#b28600"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#b20000" role="listitem" stroke="#b20000"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#000000" role="listitem" stroke="#000000"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#007c00" role="listitem" stroke="#007c00"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#800780" role="listitem" stroke="#800780"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#7c5d00" role="listitem" stroke="#7c5d00"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#ffafaf" role="listitem" stroke="#ffafaf"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#e0e000" role="listitem" stroke="#e0e000"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#0000ff" role="listitem" stroke="#0000ff"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#00ff00" role="listitem" stroke="#00ff00"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#ff00ff" role="listitem" stroke="#ff00ff"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#00e0e0" role="listitem" stroke="#00e0e0"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=""></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#0000ff" role="listitem" stroke="#0000ff"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=" M0,-8.9  L0,-44.5  a44.5,44.5,0,0,1,10.2624,1.1995 L2.0525,-8.6601  a8.9,8.9,0,0,0,-2.0525,-0.2399 L0,-8.9 "></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#ff0000" role="listitem" stroke="#ff0000"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=" M2.0525,-8.6601  L10.2624,-43.3005  a44.5,44.5,0,0,1,9.7092,3.5338 L3.9943,-7.9533  a8.9,8.9,0,0,0,-1.9418,-0.7068 L2.0525,-8.6601 "></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#b3b306" role="listitem" stroke="#b3b306"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=" M3.9943,-7.9533  L19.9716,-39.7667  a44.5,44.5,0,0,1,20.8891,22.1411 L8.1721,-3.5251  a8.9,8.9,0,0,0,-4.1778,-4.4282 L3.9943,-7.9533 "></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#ff00ff" role="listitem" stroke="#ff00ff"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=" M8.1721,-3.5251  L40.8606,-17.6255  a44.5,44.5,0,0,1,-2.3225,39.8755 L7.7076,4.45  a8.9,8.9,0,0,0,0.4645,-7.9751 L8.1721,-3.5251 "></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#0000ff" role="listitem" stroke="#0000ff"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=" M7.7076,4.45  L38.5381,22.25  a44.5,44.5,0,0,1,-43.7043,21.9491 L-1.0332,8.8398  a8.9,8.9,0,0,0,8.7409,-4.3898 L7.7076,4.45 "></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#007c7c" role="listitem" stroke="#007c7c"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=" M-1.0332,8.8398  L-5.1661,44.1991  a44.5,44.5,0,0,1,-39.2586,-41.6117 L-8.8849,0.5175  a8.9,8.9,0,0,0,7.8517,8.3223 L-1.0332,8.8398 "></path></g><g class="MP-Sprite-group"></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#b20000" role="listitem" stroke="#b20000"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=" M-8.8849,0.5175  L-44.4247,2.5874  a44.5,44.5,0,0,1,44.4247,-47.0874 L0,-8.9  a8.9,8.9,0,0,0,-8.8849,9.4175 L-8.8849,0.5175 "></path></g><g class="MP-Sprite-group"></g></g></g></g></g><g class="MP-Sprite-group MP-Container-group"><g class="MP-Container"><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1" opacity="0" visibility="hidden" aria-hidden="true"><polyline class="MP-PieTick" points="0,-44.5,-46.725,-52.725,-52.725,-52.725"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline class="MP-PieTick" points="5.16613467745,-44.19910691765,46.725,-52.368,52.725,-52.368"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline class="MP-PieTick" points="15.21989637685,-41.816321625600004,46.725,-22.368,52.725,-22.368"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline class="MP-PieTick" points="32.3681270512,-30.537752886550003,46.725,7.632,52.725,7.632"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline class="MP-PieTick" points="44.42471304435,2.58744488605,46.725,37.632,52.725,37.632"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline class="MP-PieTick" points="19.9715635189,39.76665249335,46.725,67.632,52.725,67.632"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline class="MP-PieTick" points="-32.3681270512,30.537752886550003,-46.725,36.182,-52.725,36.182"></polyline></g><g class="MP-Sprite-group MP-Tick-group MP-PieTick-group" fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline class="MP-PieTick" points="-32.3681270512,-30.537752886550003,-46.725,-36.182,-52.725,-36.182"></polyline></g></g></g><g class="MP-Sprite-group MP-Container-group"><g class="MP-Container"><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-163-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL108:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-163-description">reqDestStatus-FL108:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-176-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL108:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-176-description">reqDestStatus-FL108:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-188-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL109:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-188-description">reqDestStatus-FL109:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-200-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL109:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-200-description">reqDestStatus-FL109:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-212-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-185,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL110:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>(0.0%)</tspan></text></g><desc id="id-212-description">reqDestStatus-FL110:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-224-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-184,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL111:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>(0.0%)</tspan></text></g><desc id="id-224-description">reqDestStatus-FL111:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-236-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-185,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL112:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>(0.0%)</tspan></text></g><desc id="id-236-description">reqDestStatus-FL112:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-248-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-185,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL113:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>(0.0%)</tspan></text></g><desc id="id-248-description">reqDestStatus-FL113:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-260-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-185,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL114:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>(0.0%)</tspan></text></g><desc id="id-260-description">reqDestStatus-FL114:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-272-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-185,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL115:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>(0.0%)</tspan></text></g><desc id="id-272-description">reqDestStatus-FL115:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-284-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-185,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL115:LANE_UNAVAI</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>LABLE: 0 (0.0%)</tspan></text></g><desc id="id-284-description">reqDestStatus-FL115:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-296-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-185,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL116:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>(0.0%)</tspan></text></g><desc id="id-296-description">reqDestStatus-FL116:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-308-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-185,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL116:LANE_UNAVAI</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>LABLE: 0 (0.0%)</tspan></text></g><desc id="id-308-description">reqDestStatus-FL116:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-320-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-185,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL117:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>(0.0%)</tspan></text></g><desc id="id-320-description">reqDestStatus-FL117:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-332-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-185,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL117:LANE_UNAVAI</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>LABLE: 0 (0.0%)</tspan></text></g><desc id="id-332-description">reqDestStatus-FL117:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-344-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-185,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL118:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>(0.0%)</tspan></text></g><desc id="id-344-description">reqDestStatus-FL118:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-356-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-185,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL118:LANE_UNAVAI</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>LABLE: 0 (0.0%)</tspan></text></g><desc id="id-356-description">reqDestStatus-FL118:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-368-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-185,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL119:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>(0.0%)</tspan></text></g><desc id="id-368-description">reqDestStatus-FL119:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-380-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-185,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL119:LANE_UNAVAI</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>LABLE: 0 (0.0%)</tspan></text></g><desc id="id-380-description">reqDestStatus-FL119:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-392-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL120:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-392-description">reqDestStatus-FL120:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-404-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL121:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-404-description">reqDestStatus-FL121:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-416-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL123:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-416-description">reqDestStatus-FL123:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-428-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL125:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-428-description">reqDestStatus-FL125:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-440-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL125:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-440-description">reqDestStatus-FL125:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-452-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL126:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-452-description">reqDestStatus-FL126:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-464-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL126:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-464-description">reqDestStatus-FL126:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-476-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL127:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-476-description">reqDestStatus-FL127:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-488-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL127:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-488-description">reqDestStatus-FL127:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-500-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL128:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-500-description">reqDestStatus-FL128:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-512-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL129:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-512-description">reqDestStatus-FL129:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-524-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL130:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-524-description">reqDestStatus-FL130:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-536-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL327:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-536-description">reqDestStatus-FL327:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-548-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL327:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-548-description">reqDestStatus-FL327:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-560-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL328:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-560-description">reqDestStatus-FL328:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-572-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL328:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-572-description">reqDestStatus-FL328:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-584-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL329:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-584-description">reqDestStatus-FL329:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-596-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL329:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-596-description">reqDestStatus-FL329:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-608-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL330:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-608-description">reqDestStatus-FL330:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-620-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL330:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-620-description">reqDestStatus-FL330:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-632-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL331:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-632-description">reqDestStatus-FL331:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-644-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL332:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-644-description">reqDestStatus-FL332:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-656-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL332:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-656-description">reqDestStatus-FL332:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-668-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL333:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-668-description">reqDestStatus-FL333:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-680-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL334:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-680-description">reqDestStatus-FL334:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-692-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL335:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-692-description">reqDestStatus-FL335:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-704-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL335:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-704-description">reqDestStatus-FL335:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-716-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL336:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-716-description">reqDestStatus-FL336:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-728-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL337:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-728-description">reqDestStatus-FL337:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-740-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL337:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-740-description">reqDestStatus-FL337:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-752-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL338:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-752-description">reqDestStatus-FL338:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-764-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL339:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-764-description">reqDestStatus-FL339:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-776-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL340:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-776-description">reqDestStatus-FL340:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-788-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL340:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-788-description">reqDestStatus-FL340:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-800-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL341:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-800-description">reqDestStatus-FL341:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-812-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL342:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-812-description">reqDestStatus-FL342:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-824-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL342:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-824-description">reqDestStatus-FL342:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-836-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL343:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-836-description">reqDestStatus-FL343:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-848-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL343:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-848-description">reqDestStatus-FL343:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-860-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL344:LANE_FULL: 0</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (0.0%)</tspan></text></g><desc id="id-860-description">reqDestStatus-FL344:LANE_FULL: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-52.725)" opacity="0" visibility="hidden" aria-describedby="id-872-description" aria-hidden="true"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-193,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL344:LANE_UNAVAIL</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>ABLE: 0 (0.0%)</tspan></text></g><desc id="id-872-description">reqDestStatus-FL344:LANE_UNAVAILABLE: 0 (0.0%)</desc></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(52.725,-52.368)"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(5,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL122:LANE_FULL: 1</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (3.7%)</tspan></text></g></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(52.725,-22.368)"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(5,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL334:LANE_FULL: 1</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (3.7%)</tspan></text></g></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(52.725,7.632)"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(5,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL339:LANE_FULL: 3</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan>(11.1%)</tspan></text></g></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(52.725,37.632)"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(5,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL124:LANE_FULL: 4</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (14.8%)</tspan></text></g></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(52.725,67.632)"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(5,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL331:LANE_FULL: 5</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (18.5%)</tspan></text></g></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,36.182)"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL341:LANE_FULL: 6</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (22.2%)</tspan></text></g></g><g class="MP-Sprite-group MP-Container-group MP-Label-group MP-AxisLabel-group MP-AxisLabelCircular-group" fill="#000000" font-size="11" transform="translate(-52.725,-36.182)"><g class="MP-Container MP-Label MP-AxisLabel MP-AxisLabelCircular" transform="translate(-186,-12)" style="user-select: none;"><text x="0" y="12" overflow="hidden" dy="-3.24"><tspan>reqDestStatus-FL131:LANE_FULL: 7</tspan></text><text x="0" y="24" overflow="hidden" dy="-3.24"><tspan> (25.9%)</tspan></text></g></g></g></g></g><desc id="id-64-description">Series</desc></g></g></g><g class="MP-Sprite-group MP-Container-group" transform="translate(142.5,98)"><g class="MP-Container"><g class="MP-Sprite-group MP-Container-group MP-Series-bullets-group MP-PercentSeries-bullets-group MP-PieSeries-bullets-group"><g class="MP-Container MP-Series-bullets MP-PercentSeries-bullets MP-PieSeries-bullets"></g></g></g></g></g></g></g></g></g><desc id="id-22-description">Chart</desc></g><g class="MP-Sprite-group MP-Container-group"><g class="MP-Container"><g class="MP-Sprite-group MP-Container-group MP-Tooltip-group" role="tooltip" visibility="hidden" opacity="0"><g class="MP-Sprite-group MP-PointedShape-group MP-PointedRectangle-group" fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-50&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path class="MP-PointedRectangle" d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g class="MP-Container MP-Tooltip"><g class="MP-Sprite-group MP-Container-group MP-Label-group" fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g class="MP-Container MP-Label" transform="translate(0,7)" display="none"></g></g></g></g><g class="MP-Sprite-group MP-Container-group" visibility="hidden" display="none" style="pointer-events: none;"><g class="MP-Sprite-group MP-Rectangle-group" fill="#ffffff" opacity="1"><rect class="MP-Rectangle" width="285" height="196"></rect></g><g class="MP-Container"><g class="MP-Sprite-group MP-Container-group" transform="translate(142.5,98)"><g class="MP-Container"><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#f3f3f3" fill-opacity="0.8"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=" M53,0  a53,53,0,0,1,-106,0 a53,53,0,0,1,106,0 M42,0  a42,42,0,0,0,-84,0 a42,42,0,0,0,84,0 L42,0 "></path></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Slice-group" stroke-opacity="1" fill="#000000" fill-opacity="0.2"><g class="MP-Container MP-Slice"><g class="MP-Sprite-group"><path class="MP-Sprite" d=" M50,0  a50,50,0,0,1,-100,0 a50,50,0,0,1,100,0 M45,0  a45,45,0,0,0,-90,0 a45,45,0,0,0,90,0 L45,0 "></path></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Label-group" fill="#000000" fill-opacity="0.4"><g class="MP-Container MP-Label" transform="translate(-17,-7.5)" style="user-select: none;"><text x="17px" y="14.666666984558105" dy="-3.96" text-anchor="middle"><tspan>100%</tspan></text></g></g></g></g></g></g><g class="MP-Sprite-group MP-Container-group MP-Tooltip-group" role="tooltip" visibility="hidden" opacity="0"><g class="MP-Sprite-group MP-PointedShape-group MP-PointedRectangle-group" fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-72&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path class="MP-PointedRectangle" d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g class="MP-Container MP-Tooltip"><g class="MP-Sprite-group MP-Container-group MP-Label-group" fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g class="MP-Container MP-Label" transform="translate(0,7)" display="none"></g></g></g></g></g></g></g></g></svg></div></div></div>
                    <div id="graphImgError" class="graphImgResize hidden" style="height: 200px; width: 285px; display: none;">
                        <div id="graphImgErrorMessage"></div>
                    </div>
                <div id="yui-gen1" class="yui-resize-handle yui-resize-handle-b"><div class="yui-resize-handle-inner-b"></div></div></div>
            </td>
            <td class="tabContainer">
                <ul class="tabVertical">
                    <li class=""><div class="bitmap" title="Classic iGraph, bitmap graph with no limits"></div><span>BITMAP</span></li>
                    <li class=""><div class="zoomer" title="Interactive, zoomable graph with some features not available"></div><span>ZOOMER</span></li>
                    <li class="tabSelected"><div class="pie" title="All metric data summed, and displayed in a pie chart"></div><span>PIE</span></li>
                    <li class=""><div class="bar" title="All metric data summed, and displayed in a bar chart"></div><span>BAR</span></li>
                </ul>
            </td></tr>
            <tr><td>
            <div class="hidden zoomerControls chartControls" style="display: none;">
    <div class="labels"></div>
    <table class="controls">
      <tbody><tr>
        <td>
          <a href="#" class="selectAllMetrics" title="Click to select all data series on the graph">Select&nbsp;All</a><br>
        </td>
        <td class="stackControlCell">
          <a href="#" class="stackControl stack" title="Click to draw each data series 'stacked' on top of the one below, as cumulative total">Stack</a>
      <a href="#" class="stackControl unstack hidden" title="Revert to drawing data series independent of each other">Unstack</a><br>
        </td>
        <td>
          <span class="sortLabel">
              Sort <span class="sortOrder down" title="Select sort order: big to small, or small to big"></span> by:
          </span>
            <span class="sort">
              <input type="radio" value="label" id="labelSort_label" name="labelSort">&nbsp;<label class="sort" title="Sort labels by label" for="labelSort_label">Label</label>
            </span>
            <span class="sort">
              <input type="radio" value="min" id="labelSort_min" name="labelSort">&nbsp;<label class="sort" title="Sort labels by min" for="labelSort_min">Min</label>
            </span>
            <span class="sort">
              <input type="radio" value="max" id="labelSort_max" name="labelSort" checked="">&nbsp;<label class="sort" title="Sort labels by max" for="labelSort_max">Max</label>
            </span>
            <span class="sort">
              <input type="radio" value="avg" id="labelSort_avg" name="labelSort">&nbsp;<label class="sort" title="Sort labels by avg" for="labelSort_avg">Avg</label>
            </span>
            <span class="sort">
              <input type="radio" value="last" id="labelSort_last" name="labelSort">&nbsp;<label class="sort" title="Sort labels by last" for="labelSort_last">Last</label>
            </span>
        </td>
        <td>
          <span class="datapointHelp">(shift-click datapoint to capture it here)</span>
          <span class="capturedDatapoint hidden" style="display: none;">
              <b>Datapoint:</b> <span class="datapoint"></span>
          </span>
        </td>
      </tr>
      <tr><td colspan="3">
            <div class="warning hidden"></div>
      </td></tr>
    </tbody></table>
</div>
<div class="hidden barControls chartControls" style="display: none;">
  <a href="#" class="barOrientationControl horizontal" title="Click to draw bars horizontally">Horizontal Bars</a>
  <a href="#" class="barOrientationControl vertical hidden" title="Click to draw bars vertically">Vertical Bars</a>
  This view sums up all the values in each data series and renders the totals as a bar chart.
</div>
<div class="hidden pieControls chartControls" style="display: block;">
	This view sums up all the values in each data series and renders the totals as a pie chart.
</div>

            <div id="metricsList" class="yui-resize">
                <div id="metricsListContent"><table class="metricList">                    <tbody><tr class="metricListHeader">                        <th class="mlExpander"><span class="mlUndoSizeAndExpand" title="Click here to close all metric edit panels and undo any height sizing of the metric list"></span>                        </th><th class="mlVisibility"><div><label><a href="#" title="Show/Hide metric in the graph, (Note: If metric math is active, all metrics will be shown and this functionality will be disabled)." style="font-size:7.4pt">Show</a><input type="checkbox" onchange="return MP.MetricListWidget.toggleAllCheckBoxes(this.checked, 'mlVisibility')" title="Click here to hide all metrics." style="cursor: pointer;"></label></div>                        </th><th class="mlNum">#                        </th><th class="mlLabel" onclick="MP.util.toggleSlide('#metricRows');">Metric Label<span onclick="window.open('https://w.amazon.com?Monitoring/Documentation/MonitoringPortal/iGraph#Key_Performance_Indicators')" title="Help for adding Key Performance Indicators to your graphs (opens in a new window)" class="helpIcon kpiHelp"></span><select id="metricKPIsSelect"><option value="">+ Key Performance Indicator</option><option value="avg">avg --- Average of all datapoints (= sum / datapointCount)</option><option value="datapointCount">datapointCount --- Number of datapoints for metric/function</option><option value="dim[Metric]">dim[Metric] --- Value of a metric dimension, e.g dim[ServiceName]</option><option value="first">first --- Value of first datapoint</option><option value="firstLastPerDatapointChange">firstLastPerDatapointChange --- Average change between first and last datapoint, per datapoint</option><option value="firstLastPercentDrop">firstLastPercentDrop --- Percentage drop from first to last (= (bigger - smaller) / bigger * 100)</option><option value="firstLastPercentRise">firstLastPercentRise --- Percentage rise from first to last (= (bigger - smaller) / smaller * 100)</option><option value="firstLastRange">firstLastRange --- Absolute difference between first and last</option><option value="firstLastTimeRelative">firstLastTimeRelative --- Time difference between first and last datapoint</option><option value="firstTime">firstTime --- Time of first datapoint</option><option value="firstTimeRelative">firstTimeRelative --- Time of first datapoint relative to now</option><option value="last">last --- Value of last datapoint</option><option value="lastTime">lastTime --- Time of last datapoint</option><option value="lastTimeRelative">lastTimeRelative --- Time of last datapoint relative to now</option><option value="max">max --- Maximum value of all datapoints</option><option value="maxPredictionDrop">maxPredictionDrop --- Value of the biggest absolute drop between predicted and actual values of a metric</option><option value="maxPredictionDropPercent">maxPredictionDropPercent --- Percentage decrease of maxPredictionDrop, (= (maxPredictionDrop / predicted value) * 100).</option><option value="maxPredictionDropTime">maxPredictionDropTime --- Time of maxPredictionDrop</option><option value="maxPredictionDropTimeRelative">maxPredictionDropTimeRelative --- Time of maxPredictionDrop relative to now</option><option value="maxPredictionRise">maxPredictionRise --- Value of the biggest absolute rise between predicted and actual values of a metric</option><option value="maxPredictionRisePercent">maxPredictionRisePercent --- Percentage increase of maxPredictionRise, (= (maxPredictionRise / predicted value) * 100).</option><option value="maxPredictionRiseTime">maxPredictionRiseTime --- Time of maxPredictionRise</option><option value="maxPredictionRiseTimeRelative">maxPredictionRiseTimeRelative --- Time of maxPredictionRise relative to now</option><option value="maxTime">maxTime --- Time of maximum datapoint</option><option value="maxTimeRelative">maxTimeRelative --- Time of maximum datapoint relative to now</option><option value="metricLabel">metricLabel --- Label of metric (applies to search patterns only, e.g. S1)</option><option value="min">min --- Minimum value of all datapoints</option><option value="minTime">minTime --- Time of minimum datapoint</option><option value="minTimeRelative">minTimeRelative --- Time of minimum datapoint relative to now</option><option value="minMaxPercentDrop">minMaxPercentDrop --- Percentage drop from max to min: (= (max - min) / max * 100)</option><option value="minMaxPercentRise">minMaxPercentRise --- Percentage rise from min to max: (= (max - min) / min * 100)</option><option value="minMaxRange">minMaxRange --- Difference between max and min (= max - min)</option><option value="nowTime">nowTime --- Time of right now</option><option value="predictionSum">predictionSum --- The sum of all predicted values.</option><option value="sum">sum --- Sum of all datapoints</option><option value="sumPredictionDifference">sumPredictionDifference --- The difference betweeen sum and predictionSum (= sum - predictionSum)</option></select><div class="kpi-metric-math-warning warning" style="display: none;">Search pattern labels can only be controlled via Metric Math. Your metrics below have been copied to the <b>Metric Math</b> panel to the right and the labels for them will be updated there.</div>                        </th><th class="mlLiveData"><div><label><a href="#" title="Display most recent datapoint, even when not yet fully aggregated. Click help icon in top right of page for more information.">Live</a><input type="checkbox" onchange="return MP.MetricListWidget.toggleAllCheckBoxes(this.checked, 'mlLiveData')"></label></div>                        </th><th class="mlPeriod"><div>Period<div class="periodQuickLinks"><a href="#">1m</a> <a href="#">5m</a> <a href="#">1h</a> <a href="#">1d</a> <a href="#">1w</a></div></div>                        </th><th class="mlStat"><div>Stat<div class="statQuickLinks"><a href="#">avg</a> <a href="#">sum</a> <a href="#">n</a> <a href="#">p99</a></div></div>                        </th><th class="mlControls"><div>                          <input class="mergeMetrics hideForExpandTiny pasteUrlHereText" type="text" id="mergeMetrics" value="" title="Paste or drag and drop an iGraph image/URL or a Tiny URL here to merge it with the current graph.">                          <img src="/images/to-merge.png" style="display: none;">                           <img src="/images/spinner.gif" style="display: none;" class="tinyExpandSpinner">                         </div></th>                    </tr>                </tbody></table>                <table class="metricList metricEmpty" style="display: none;">                    <tbody><tr class="mlEven">                        <td colspan="10">Please search for metrics below and add then add them to this list to graph them</td>                    </tr>                </tbody></table><div id="metricRows"></div><table id="metric0row" class="metricList metricSummary metricDisplay metric0">            <tbody><tr class="mlEven">                <td class="mlExpander mlClickExpand" title="Click here to toggle metric edit panel" style="opacity: 1;"><span class="expanderBlackGrow"></span></td>                <td id="metric0Visibility" class="mlVisibility" style="opacity: 1;"><input type="checkbox" name="visible0Value" onchange="return MP.MetricListWidget.theCallbackForCheckbox('0','visible','input[name=visible0Value]')" title="Click here to hide this metric." style="cursor: pointer;"><span class="meCopyToAll" field="visible" inputtype="checkbox" title="Copy this value to all metrics" style="visibility: hidden;"></span></td>                <td class="mlNum mlClickExpand" title="Click here to toggle metric edit panel" style="opacity: 1;">S1</td>                <td id="metric0Label" class="mlLabel mlClickExpand" title="Click here to toggle metric edit panel" style="opacity: 1;">Search 'marketplace=$TEB9-MainSorterCont ... OT methodname=$ALL$ NOT NON_OPERATIONAL'</td>                <td id="metric0LiveData" class="mlLiveData" style="opacity: 1;"><input type="checkbox" name="liveData0Value" onchange="return MP.MetricListWidget.theCallbackForCheckbox('0','liveData','input[name=liveData0Value]')"><span class="meCopyToAll" field="liveData" inputtype="checkbox" title="Copy this value to all metrics" style="visibility: hidden;"></span></td>                <td id="metric0Period" class="mlPeriod mlClickExpand" title="Click here to toggle metric edit panel" style="opacity: 1;">1 Min</td>                <td id="metric0Stat" class="mlStat mlClickExpand" title="Click here to toggle metric edit panel" style="opacity: 1;">n</td>                <td class="mlControls" style="opacity: 1;">                    <ul class="metricControl">                        <li title="Delete metric statistic (Use Ctrl/Cmd-click to delete all other metrics)" class="removeMetric icon"></li><li title="Search for this metric (handy for finding similar metrics or viewing valid period + stats for this metric)" class="searchMetric icon"></li><li title="Add an alarm monitor for this metric" class="monitorMetricDisabled icon monitor"></li><li title="Duplicate this metric (you can edit it after)" class="duplicateMetric icon"></li>                    </ul>                </td>            </tr>        </tbody></table><div id="me0" class="metricEdit metricDisplay metric0" style="display: none;">                <table width="100%" cellspacing="0" cellpadding="0" border="0" class="sectionBox" id="id" style="display: ;">         <tbody><tr>          <td width="100%" class="topLeft">          <table>              <tbody><tr>                  <td class="meColumn">                    <table>                      <tbody><tr><td colspan="2">                    <table id="metricSchemaTable0" class="metricSchemaTable">                        <tbody><tr>                            <td class="meLabel">Schema Name:</td>                            <td class="meValue meSchemaName">Search</td>                        </tr><tr class="me0Row"><td class="meLabel">Pattern:</td><td><textarea class="meText" rows="5" id="mePattern0" onchange="MP.MetricListWidget._dimChanged(0, 'Pattern', this)">marketplace=$TEB9-MainSorterController$ req FL :Lane schemaname=Service NOT methodname=$ALL$ NOT NON_OPERATIONAL</textarea></td><td><span class="meCopyToAll" dimension="Pattern" inputtype="text" title="Copy this value to all metrics" style="visibility: hidden;"></span></td></tr></tbody></table></td></tr>                    </tbody></table>                  </td>                  <td class="meMiddleColumn"><div class="meMiddleColumn"></div></td>                  <td class="meColumn">                    <table><tbody><tr class="me0Row"><td class="meLabel">Period:</td><td><li class="previewOptionsLi periodItemClass"><input id="OneMinute0Input" type="radio" name="periodOptions0" checked="" onclick="return MP.MetricListWidget.theCallBack('0','period','OneMinute')"><label for="OneMinute0Input" id="OneMinute0Label">1 Min</label></li><li class="previewOptionsLi periodItemClass"><input id="FiveMinute0Input" type="radio" name="periodOptions0" onclick="return MP.MetricListWidget.theCallBack('0','period','FiveMinute')"><label for="FiveMinute0Input" id="FiveMinute0Label">5 Min</label></li><li class="previewOptionsLi periodItemClass"><input id="OneHour0Input" type="radio" name="periodOptions0" onclick="return MP.MetricListWidget.theCallBack('0','period','OneHour')"><label for="OneHour0Input" id="OneHour0Label">1 Hr</label></li><li class="previewOptionsLi periodItemClass"><input id="OneDay0Input" type="radio" name="periodOptions0" onclick="return MP.MetricListWidget.theCallBack('0','period','OneDay')"><label for="OneDay0Input" id="OneDay0Label">1 Day</label></li><li class="previewOptionsLi periodItemClass"><input id="OneWeek0Input" type="radio" name="periodOptions0" onclick="return MP.MetricListWidget.theCallBack('0','period','OneWeek')"><label for="OneWeek0Input" id="OneWeek0Label">1 Wk</label></li><span class="meCopyToAll" field="period" inputtype="options" title="Copy this value to all metrics" style="visibility: hidden;"></span></td></tr><tr class="me0Row"><td class="meLabel">Stat:</td><td><input class="meStat" id="meStat0" size="6" type="text" value="n" onchange="return MP.MetricListWidget.theCallBack(0,'stat', this.value);"><select name="meStatHelper"><option value="avg">avg</option><option value="sum">sum</option><option value="n">n</option><option value="-" disabled="">-</option><option value="p">Percentile...</option><option value="p0">p0</option><option value="p50">p50</option><option value="p90">p90</option><option value="p95">p95</option><option value="p99">p99</option><option value="p99.9">p99.9</option><option value="p99.99">p99.99</option><option value="p100">p100</option><option value="-" disabled="">-</option><option value="o">Overstat...</option><option value="o500">o500</option><option value="o1000">o1000</option><option value="o2000">o2000</option><option value="-" disabled="">-</option><option value="u">Understat...</option><option value="u500">u500</option><option value="u1000">u1000</option><option value="u2000">u2000</option></select><span class="helpIcon" title="Help for stats and their meaning (opens in a new window)" onclick="window.open('https://w.amazon.com?Monitoring/Documentation/MonitorWebservice/Reference/MetricStatistic')"></span><span class="meCopyToAll" field="stat" inputtype="text" title="Copy this value to all metrics" style="visibility: hidden;"></span></td></tr><tr class="me0Row"><td class="meLabel">Y-Axis:</td><td><li class="previewOptionsLi yAxisPreferenceItemClass"><input id="left0Input" type="radio" name="yAxisPreferenceOptions0" checked="" onclick="return MP.MetricListWidget.theCallBack('0','yAxisPreference','left')"><label for="left0Input" id="left0Label">left</label></li><li class="previewOptionsLi yAxisPreferenceItemClass"><input id="right0Input" type="radio" name="yAxisPreferenceOptions0" onclick="return MP.MetricListWidget.theCallBack('0','yAxisPreference','right')"><label for="right0Input" id="right0Label">right</label></li><span class="meCopyToAll" field="yAxisPreference" inputtype="options" title="Copy this value to all metrics" style="visibility: hidden;"></span></td></tr><tr class="me0Row"><td class="meLabel">Units:</td><td><select name="valueUnit0Value"><option value="none">none</option><option value="nanosecond">nanosecond</option><option value="microsecond">microsecond</option><option value="millisecond">millisecond</option><option value="second">second</option><option value="minute">minute</option><option value="hour">hour</option><option value="day">day</option><option value="week">week</option><option value="byte">byte</option><option value="kilobyte">kilobyte</option><option value="megabyte">megabyte</option><option value="gigabyte">gigabyte</option><option value="terabyte">terabyte</option><option value="kibibyte">kibibyte</option><option value="mebibyte">mebibyte</option><option value="gibibyte">gibibyte</option><option value="tebibyte">tebibyte</option><option value="cpuSecond">cpuSecond</option><option value="request">request</option><option value="page">page</option><option value="order">order</option><option value="percent">percent</option><option value="file">file</option></select><span class="meCopyToAll" field="valueUnit" inputtype="enum" title="Copy this value to all metrics" style="visibility: hidden;"></span></td></tr><tr class="me0Row"><td class="meLabel">Predictions:</td><td><select name="statOptions0Value"><option value="Val">Off</option><option value="Predictions">On</option></select><span class="meCopyToAll" field="statOptions" inputtype="enum" title="Copy this value to all metrics" style="visibility: hidden;"></span></td></tr></tbody></table>                  </td>             </tr>          </tbody></table>                    </td>          <td class="topRight">&nbsp;</td>      </tr>      <tr>        <td class="bottomLeft">&nbsp;</td>        <td class="bottomRight">&nbsp;</td>      </tr>       </tbody></table>        </div></div>
            <div id="yui-gen2" class="yui-resize-handle yui-resize-handle-b"><div class="yui-resize-handle-inner-b"></div></div></div>
            </td><td></td></tr></tbody></table>
        </div>
        <div id="graphOptions">
            <div> 
                <button id="graphMetricsButton" type="submit" class="bigButton" value="submit" onclick="MP.GraphSection.displayGraph()"><span>Update Graph</span></button>
                  <span id="createAlarmButtonWrapper" disabled-mm="" tabindex="0">
                      <button id="createAlarmButton" disabled="" class="alarmButton bigButton lightButton" onclick="MP.Monitors.monitorMetrics()"><span>Create Alarm</span></button>
                  </span>
            </div>

            <div class="readOnlyGraphTitle">Title:<input id="readOnlyGraphTitleInput" type="text" readonly=""></div>

                  <div class="sectionHeader timeRangesHeader" id="timeRangesHeader">
        <table><tbody><tr>
          <td width="99%" class="sectionHeaderTitle" onclick="MP.SectionHelper.toggleSectionVisibility('timeRanges');">
            <span class="expander expanderShrink"></span>Time Range
          </td>
          <td class="headerRight"><span class="timeSwitch fixedTimeSwitch"><em>[</em><a href="#" class="setFixedTimeType">To fixed time</a><em>]</em>&nbsp;</span><span class="timeSwitch relativeTimeSwitch hidden" style="display: none;"><em>[</em><a href="#" class="setRelativeTimeType">To relative time</a><em>]</em>&nbsp;</span><span class="timeSwitch naturalTimeSwitch"><em>[</em><a href="#" class="setNaturalTimeType">To natural time</a><em>]</em>&nbsp;</span></td>
        </tr></tbody></table>
      </div>

      <table width="100%" cellspacing="0" cellpadding="0" border="0" class="sectionBox" id="timeRanges" style="display: ;">         <tbody><tr>          <td width="100%" class="topLeft"> 
    <div id="natural-time" class="timePanel hidden" style="display: none;">
        <table>
            <tbody><tr class="show quickZoom"><td>Zoom:</td><td><a href="#">1h</a> | <a href="#">3h</a> | <a href="#">8h</a> | <a href="#">1d</a> | <a href="#">2d</a> | <a href="#">1w</a> | <a href="#">2w</a> | <a href="#">30d</a></td></tr>
            <tr class="show">
                <td class="timeRangeTitle">Start:</td>
                <td class="timeRangeValue">
                    <input name="startNatural" id="startNatural" type="text" size="25"> 
                    <b>PST</b>
                    &nbsp;[<a href="#" class="startNow">-3hrs</a>]
                        <span onclick="window.open('https://w.amazon.com?Monitoring/Documentation/MonitoringPortal/iGraph#Natural_Time')" title="See examples of Natural Time formats (opens in a new window)" class="helpIcon">
                </span></td>
            </tr>
            <tr class="show">
                <td class="timeRangeTitle">End:</td>
                <td class="timeRangeValue">
                    <input name="endNatural" id="endNatural" type="text" size="25"> 
                    <b>PST</b>
                    &nbsp;[<a href="#" class="endNow">now</a>]
                        
                </td>
            </tr>
        </tbody></table>
    </div>
    <div id="fixed-time" class="timePanel hidden" style="display: none;">
        <table>
            <tbody><tr class="show quickZoom"><td>Zoom:</td><td><a href="#">1h</a> | <a href="#">3h</a> | <a href="#">8h</a> | <a href="#">1d</a> | <a href="#">2d</a> | <a href="#">1w</a> | <a href="#">2w</a> | <a href="#">30d</a></td></tr>
            <tr class="show">
                <td class="timeRangeTitle">Start:</td>
                <td class="timeRangeValue">
                    <input name="startDate" id="startDate" type="text" class="fixedTimeValue hasDatepicker"><img class="ui-datepicker-trigger" src="/images/calendar.png" alt="..." title="..."> 
                    &nbsp;
                    <select name="startHours">
                        <option value="0">00</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                    </select>
                    <select name="startMinutes">
                        <option value="0">00</option>
                        <option value="5">05</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                    </select>
                    <b>PST</b>
                    &nbsp;[<a href="#" class="startNow">-3hrs</a>]
                </td>
            </tr>
            <tr class="show">
                <td class="timeRangeTitle">End:</td>
                <td class="timeRangeValue">
                    <input name="endDate" id="endDate" type="text" class="fixedTimeValue hasDatepicker"><img class="ui-datepicker-trigger" src="/images/calendar.png" alt="..." title="..."> 
                    &nbsp;
                    <select name="endHours">
                        <option value="0">00</option>
                        <option value="1">01</option>
                        <option value="2">02</option>
                        <option value="3">03</option>
                        <option value="4">04</option>
                        <option value="5">05</option>
                        <option value="6">06</option>
                        <option value="7">07</option>
                        <option value="8">08</option>
                        <option value="9">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                    </select>
                    <select name="endMinutes">
                        <option value="0">00</option>
                        <option value="5">05</option>
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="25">25</option>
                        <option value="30">30</option>
                        <option value="35">35</option>
                        <option value="40">40</option>
                        <option value="45">45</option>
                        <option value="50">50</option>
                        <option value="55">55</option>
                    </select>
                    <b>PST</b>
                    &nbsp;[<a href="#" class="endNow">now</a>]
                </td>
            </tr>
        </tbody></table>
    </div>
    <div id="relative-time" class="timePanel" style="display: block;">
        <table>
            <tbody><tr class="show quickZoom"><td>Zoom:</td><td><a href="#">1h</a> | <a href="#">3h</a> | <a href="#">8h</a> | <a href="#">1d</a> | <a href="#">2d</a> | <a href="#">1w</a> | <a href="#">2w</a> | <a href="#">30d</a></td></tr>
            <tr class="show">
                <td class="timeRangeTitle">Start:</td>
                <td class="relativeTimeRangeValue">
                    <input name="" id="startTimeValue" type="text" size="7"> 
                    <select name="startValue">
                    <option value="minutes">minutes ago</option>
                    <option value="hours">hours ago</option>
                    <option value="days">days ago</option>
       		        </select>
                 </td>
            </tr>
            <tr class="show">
                <td class="timeRangeTitle">End:</td>
                <td class="relativeTimeRangeValue">
                    <input name="" id="endTimeValue" type="text" size="7"> 
                    <select name="endValue">
                    <option value="minutes">minutes ago</option>
                    <option value="hours">hours ago</option>
                    <option value="days">days ago</option>
       		        </select>
                 </td>
            </tr>
        </tbody></table> 
    </div>
    <div class="timezonePanel">
        <table>
            <tbody><tr>
                <td class="helpCursor graphOptionTitle" title="Display Timezone (not the timezone of the Start/End times above)">Display Timezone:</td>
                <td class="tzZone">
                    <select id="tzZone" title="Display Timezone (not the timezone of the Start/End times above)"><option value="">default (US/Pacific)</option><option value="UTC">UTC</option><option value="US/Pacific">US/Pacific</option><option value="CST6CDT">CST6CDT</option><option value="EST">EST</option><option value="EST5EDT">EST5EDT</option><option value="HST">HST</option><option value="IST">IST</option><option value="JST">JST</option><option value="MST">MST</option><option value="MST7MDT">MST7MDT</option><option value="PDT">PDT</option><option value="PST">PST</option><option value="PST8PDT">PST8PDT</option><option value="Africa/Johannesburg">Africa/Johannesburg</option><option disabled="">--Choose by city--</option><option value="Africa/Abidjan">Africa/Abidjan</option><option value="Africa/Accra">Africa/Accra</option><option value="Africa/Addis_Ababa">Africa/Addis_Ababa</option><option value="Africa/Algiers">Africa/Algiers</option><option value="Africa/Asmara">Africa/Asmara</option><option value="Africa/Bamako">Africa/Bamako</option><option value="Africa/Bangui">Africa/Bangui</option><option value="Africa/Banjul">Africa/Banjul</option><option value="Africa/Bissau">Africa/Bissau</option><option value="Africa/Blantyre">Africa/Blantyre</option><option value="Africa/Brazzaville">Africa/Brazzaville</option><option value="Africa/Bujumbura">Africa/Bujumbura</option><option value="Africa/Cairo">Africa/Cairo</option><option value="Africa/Casablanca">Africa/Casablanca</option><option value="Africa/Ceuta">Africa/Ceuta</option><option value="Africa/Conakry">Africa/Conakry</option><option value="Africa/Dakar">Africa/Dakar</option><option value="Africa/Dar_es_Salaam">Africa/Dar_es_Salaam</option><option value="Africa/Djibouti">Africa/Djibouti</option><option value="Africa/Douala">Africa/Douala</option><option value="Africa/El_Aaiun">Africa/El_Aaiun</option><option value="Africa/Freetown">Africa/Freetown</option><option value="Africa/Gaborone">Africa/Gaborone</option><option value="Africa/Harare">Africa/Harare</option><option value="Africa/Kampala">Africa/Kampala</option><option value="Africa/Khartoum">Africa/Khartoum</option><option value="Africa/Kigali">Africa/Kigali</option><option value="Africa/Kinshasa">Africa/Kinshasa</option><option value="Africa/Lagos">Africa/Lagos</option><option value="Africa/Libreville">Africa/Libreville</option><option value="Africa/Lome">Africa/Lome</option><option value="Africa/Luanda">Africa/Luanda</option><option value="Africa/Lubumbashi">Africa/Lubumbashi</option><option value="Africa/Lusaka">Africa/Lusaka</option><option value="Africa/Malabo">Africa/Malabo</option><option value="Africa/Maputo">Africa/Maputo</option><option value="Africa/Maseru">Africa/Maseru</option><option value="Africa/Mbabane">Africa/Mbabane</option><option value="Africa/Mogadishu">Africa/Mogadishu</option><option value="Africa/Monrovia">Africa/Monrovia</option><option value="Africa/Nairobi">Africa/Nairobi</option><option value="Africa/Ndjamena">Africa/Ndjamena</option><option value="Africa/Niamey">Africa/Niamey</option><option value="Africa/Nouakchott">Africa/Nouakchott</option><option value="Africa/Ouagadougou">Africa/Ouagadougou</option><option value="Africa/Porto-Novo">Africa/Porto-Novo</option><option value="Africa/Sao_Tome">Africa/Sao_Tome</option><option value="Africa/Tripoli">Africa/Tripoli</option><option value="Africa/Tunis">Africa/Tunis</option><option value="Africa/Windhoek">Africa/Windhoek</option><option value="America/Adak">America/Adak</option><option value="America/Anchorage">America/Anchorage</option><option value="America/Anguilla">America/Anguilla</option><option value="America/Antigua">America/Antigua</option><option value="America/Araguaina">America/Araguaina</option><option value="America/Argentina/Buenos_Aires">America/Argentina/Buenos_Aires</option><option value="America/Argentina/Catamarca">America/Argentina/Catamarca</option><option value="America/Argentina/Cordoba">America/Argentina/Cordoba</option><option value="America/Argentina/Jujuy">America/Argentina/Jujuy</option><option value="America/Argentina/La_Rioja">America/Argentina/La_Rioja</option><option value="America/Argentina/Mendoza">America/Argentina/Mendoza</option><option value="America/Argentina/Rio_Gallegos">America/Argentina/Rio_Gallegos</option><option value="America/Argentina/San_Juan">America/Argentina/San_Juan</option><option value="America/Argentina/Tucuman">America/Argentina/Tucuman</option><option value="America/Argentina/Ushuaia">America/Argentina/Ushuaia</option><option value="America/Aruba">America/Aruba</option><option value="America/Asuncion">America/Asuncion</option><option value="America/Atikokan">America/Atikokan</option><option value="America/Bahia">America/Bahia</option><option value="America/Barbados">America/Barbados</option><option value="America/Belem">America/Belem</option><option value="America/Belize">America/Belize</option><option value="America/Blanc-Sablon">America/Blanc-Sablon</option><option value="America/Boa_Vista">America/Boa_Vista</option><option value="America/Bogota">America/Bogota</option><option value="America/Boise">America/Boise</option><option value="America/Cambridge_Bay">America/Cambridge_Bay</option><option value="America/Campo_Grande">America/Campo_Grande</option><option value="America/Cancun">America/Cancun</option><option value="America/Caracas">America/Caracas</option><option value="America/Cayenne">America/Cayenne</option><option value="America/Cayman">America/Cayman</option><option value="America/Chicago">America/Chicago</option><option value="America/Chihuahua">America/Chihuahua</option><option value="America/Costa_Rica">America/Costa_Rica</option><option value="America/Cuiaba">America/Cuiaba</option><option value="America/Curacao">America/Curacao</option><option value="America/Danmarkshavn">America/Danmarkshavn</option><option value="America/Dawson">America/Dawson</option><option value="America/Dawson_Creek">America/Dawson_Creek</option><option value="America/Denver">America/Denver</option><option value="America/Detroit">America/Detroit</option><option value="America/Dominica">America/Dominica</option><option value="America/Edmonton">America/Edmonton</option><option value="America/Eirunepe">America/Eirunepe</option><option value="America/El_Salvador">America/El_Salvador</option><option value="America/Fortaleza">America/Fortaleza</option><option value="America/Glace_Bay">America/Glace_Bay</option><option value="America/Godthab">America/Godthab</option><option value="America/Goose_Bay">America/Goose_Bay</option><option value="America/Grand_Turk">America/Grand_Turk</option><option value="America/Grenada">America/Grenada</option><option value="America/Guadeloupe">America/Guadeloupe</option><option value="America/Guatemala">America/Guatemala</option><option value="America/Guayaquil">America/Guayaquil</option><option value="America/Guyana">America/Guyana</option><option value="America/Halifax">America/Halifax</option><option value="America/Havana">America/Havana</option><option value="America/Hermosillo">America/Hermosillo</option><option value="America/Indiana/Indianapolis">America/Indiana/Indianapolis</option><option value="America/Indiana/Knox">America/Indiana/Knox</option><option value="America/Indiana/Marengo">America/Indiana/Marengo</option><option value="America/Indiana/Petersburg">America/Indiana/Petersburg</option><option value="America/Indiana/Tell_City">America/Indiana/Tell_City</option><option value="America/Indiana/Vevay">America/Indiana/Vevay</option><option value="America/Indiana/Vincennes">America/Indiana/Vincennes</option><option value="America/Indiana/Winamac">America/Indiana/Winamac</option><option value="America/Inuvik">America/Inuvik</option><option value="America/Iqaluit">America/Iqaluit</option><option value="America/Jamaica">America/Jamaica</option><option value="America/Juneau">America/Juneau</option><option value="America/Kentucky/Louisville">America/Kentucky/Louisville</option><option value="America/Kentucky/Monticello">America/Kentucky/Monticello</option><option value="America/La_Paz">America/La_Paz</option><option value="America/Lima">America/Lima</option><option value="America/Los_Angeles">America/Los_Angeles</option><option value="America/Maceio">America/Maceio</option><option value="America/Managua">America/Managua</option><option value="America/Manaus">America/Manaus</option><option value="America/Martinique">America/Martinique</option><option value="America/Mazatlan">America/Mazatlan</option><option value="America/Menominee">America/Menominee</option><option value="America/Merida">America/Merida</option><option value="America/Mexico_City">America/Mexico_City</option><option value="America/Miquelon">America/Miquelon</option><option value="America/Moncton">America/Moncton</option><option value="America/Monterrey">America/Monterrey</option><option value="America/Montevideo">America/Montevideo</option><option value="America/Montreal">America/Montreal</option><option value="America/Montserrat">America/Montserrat</option><option value="America/Nassau">America/Nassau</option><option value="America/New_York">America/New_York</option><option value="America/Nipigon">America/Nipigon</option><option value="America/Nome">America/Nome</option><option value="America/Noronha">America/Noronha</option><option value="America/North_Dakota/Center">America/North_Dakota/Center</option><option value="America/North_Dakota/New_Salem">America/North_Dakota/New_Salem</option><option value="America/Panama">America/Panama</option><option value="America/Paramaribo">America/Paramaribo</option><option value="America/Phoenix">America/Phoenix</option><option value="America/Port-au-Prince">America/Port-au-Prince</option><option value="America/Port_of_Spain">America/Port_of_Spain</option><option value="America/Porto_Velho">America/Porto_Velho</option><option value="America/Puerto_Rico">America/Puerto_Rico</option><option value="America/Recife">America/Recife</option><option value="America/Regina">America/Regina</option><option value="America/Resolute">America/Resolute</option><option value="America/Santiago">America/Santiago</option><option value="America/Santo_Domingo">America/Santo_Domingo</option><option value="America/Sao_Paulo">America/Sao_Paulo</option><option value="America/St_Johns">America/St_Johns</option><option value="America/St_Kitts">America/St_Kitts</option><option value="America/St_Lucia">America/St_Lucia</option><option value="America/St_Thomas">America/St_Thomas</option><option value="America/St_Vincent">America/St_Vincent</option><option value="America/Thule">America/Thule</option><option value="America/Tijuana">America/Tijuana</option><option value="America/Toronto">America/Toronto</option><option value="America/Tortola">America/Tortola</option><option value="America/Vancouver">America/Vancouver</option><option value="America/Whitehorse">America/Whitehorse</option><option value="America/Winnipeg">America/Winnipeg</option><option value="America/Yakutat">America/Yakutat</option><option value="America/Yellowknife">America/Yellowknife</option><option value="Antarctica/Casey">Antarctica/Casey</option><option value="Antarctica/Davis">Antarctica/Davis</option><option value="Antarctica/DumontDUrville">Antarctica/DumontDUrville</option><option value="Antarctica/Mawson">Antarctica/Mawson</option><option value="Antarctica/McMurdo">Antarctica/McMurdo</option><option value="Antarctica/Palmer">Antarctica/Palmer</option><option value="Antarctica/Rothera">Antarctica/Rothera</option><option value="Antarctica/Syowa">Antarctica/Syowa</option><option value="Antarctica/Vostok">Antarctica/Vostok</option><option value="Asia/Aden">Asia/Aden</option><option value="Asia/Almaty">Asia/Almaty</option><option value="Asia/Amman">Asia/Amman</option><option value="Asia/Anadyr">Asia/Anadyr</option><option value="Asia/Aqtau">Asia/Aqtau</option><option value="Asia/Aqtobe">Asia/Aqtobe</option><option value="Asia/Ashgabat">Asia/Ashgabat</option><option value="Asia/Baghdad">Asia/Baghdad</option><option value="Asia/Bahrain">Asia/Bahrain</option><option value="Asia/Baku">Asia/Baku</option><option value="Asia/Bangkok">Asia/Bangkok</option><option value="Asia/Beirut">Asia/Beirut</option><option value="Asia/Bishkek">Asia/Bishkek</option><option value="Asia/Brunei">Asia/Brunei</option><option value="Asia/Choibalsan">Asia/Choibalsan</option><option value="Asia/Chongqing">Asia/Chongqing</option><option value="Asia/Colombo">Asia/Colombo</option><option value="Asia/Damascus">Asia/Damascus</option><option value="Asia/Dhaka">Asia/Dhaka</option><option value="Asia/Dili">Asia/Dili</option><option value="Asia/Dubai">Asia/Dubai</option><option value="Asia/Dushanbe">Asia/Dushanbe</option><option value="Asia/Gaza">Asia/Gaza</option><option value="Asia/Harbin">Asia/Harbin</option><option value="Asia/Ho_Chi_Minh">Asia/Ho_Chi_Minh</option><option value="Asia/Hong_Kong">Asia/Hong_Kong</option><option value="Asia/Hovd">Asia/Hovd</option><option value="Asia/Jakarta">Asia/Jakarta</option><option value="Asia/Jerusalem">Asia/Jerusalem</option><option value="Asia/Kabul">Asia/Kabul</option><option value="Asia/Karachi">Asia/Karachi</option><option value="Asia/Kashgar">Asia/Kashgar</option><option value="Asia/Kolkata">Asia/Kolkata</option><option value="Asia/Krasnoyarsk">Asia/Krasnoyarsk</option><option value="Asia/Kuala_Lumpur">Asia/Kuala_Lumpur</option><option value="Asia/Kuching">Asia/Kuching</option><option value="Asia/Kuwait">Asia/Kuwait</option><option value="Asia/Macau">Asia/Macau</option><option value="Asia/Magadan">Asia/Magadan</option><option value="Asia/Makassar">Asia/Makassar</option><option value="Asia/Manila">Asia/Manila</option><option value="Asia/Muscat">Asia/Muscat</option><option value="Asia/Nicosia">Asia/Nicosia</option><option value="Asia/Omsk">Asia/Omsk</option><option value="Asia/Oral">Asia/Oral</option><option value="Asia/Phnom_Penh">Asia/Phnom_Penh</option><option value="Asia/Pontianak">Asia/Pontianak</option><option value="Asia/Pyongyang">Asia/Pyongyang</option><option value="Asia/Qatar">Asia/Qatar</option><option value="Asia/Qyzylorda">Asia/Qyzylorda</option><option value="Asia/Rangoon">Asia/Rangoon</option><option value="Asia/Riyadh">Asia/Riyadh</option><option value="Asia/Sakhalin">Asia/Sakhalin</option><option value="Asia/Samarkand">Asia/Samarkand</option><option value="Asia/Seoul">Asia/Seoul</option><option value="Asia/Shanghai">Asia/Shanghai</option><option value="Asia/Singapore">Asia/Singapore</option><option value="Asia/Taipei">Asia/Taipei</option><option value="Asia/Tashkent">Asia/Tashkent</option><option value="Asia/Tbilisi">Asia/Tbilisi</option><option value="Asia/Tehran">Asia/Tehran</option><option value="Asia/Thimphu">Asia/Thimphu</option><option value="Asia/Tokyo">Asia/Tokyo</option><option value="Asia/Ulaanbaatar">Asia/Ulaanbaatar</option><option value="Asia/Urumqi">Asia/Urumqi</option><option value="Asia/Vientiane">Asia/Vientiane</option><option value="Asia/Vladivostok">Asia/Vladivostok</option><option value="Asia/Yakutsk">Asia/Yakutsk</option><option value="Asia/Yekaterinburg">Asia/Yekaterinburg</option><option value="Asia/Yerevan">Asia/Yerevan</option><option value="Atlantic/Azores">Atlantic/Azores</option><option value="Atlantic/Bermuda">Atlantic/Bermuda</option><option value="Atlantic/Canary">Atlantic/Canary</option><option value="Atlantic/Cape_Verde">Atlantic/Cape_Verde</option><option value="Atlantic/Faroe">Atlantic/Faroe</option><option value="Atlantic/Madeira">Atlantic/Madeira</option><option value="Atlantic/Reykjavik">Atlantic/Reykjavik</option><option value="Atlantic/South_Georgia">Atlantic/South_Georgia</option><option value="Atlantic/St_Helena">Atlantic/St_Helena</option><option value="Atlantic/Stanley">Atlantic/Stanley</option><option value="Australia/Adelaide">Australia/Adelaide</option><option value="Australia/Brisbane">Australia/Brisbane</option><option value="Australia/Broken_Hill">Australia/Broken_Hill</option><option value="Australia/Currie">Australia/Currie</option><option value="Australia/Darwin">Australia/Darwin</option><option value="Australia/Eucla">Australia/Eucla</option><option value="Australia/Hobart">Australia/Hobart</option><option value="Australia/Lindeman">Australia/Lindeman</option><option value="Australia/Lord_Howe">Australia/Lord_Howe</option><option value="Australia/Melbourne">Australia/Melbourne</option><option value="Australia/Perth">Australia/Perth</option><option value="Australia/Sydney">Australia/Sydney</option><option value="Europe/Amsterdam">Europe/Amsterdam</option><option value="Europe/Andorra">Europe/Andorra</option><option value="Europe/Athens">Europe/Athens</option><option value="Europe/Belgrade">Europe/Belgrade</option><option value="Europe/Berlin">Europe/Berlin</option><option value="Europe/Brussels">Europe/Brussels</option><option value="Europe/Bucharest">Europe/Bucharest</option><option value="Europe/Budapest">Europe/Budapest</option><option value="Europe/Chisinau">Europe/Chisinau</option><option value="Europe/Copenhagen">Europe/Copenhagen</option><option value="Europe/Dublin">Europe/Dublin</option><option value="Europe/Gibraltar">Europe/Gibraltar</option><option value="Europe/Helsinki">Europe/Helsinki</option><option value="Europe/Istanbul">Europe/Istanbul</option><option value="Europe/Kaliningrad">Europe/Kaliningrad</option><option value="Europe/Kiev">Europe/Kiev</option><option value="Europe/Lisbon">Europe/Lisbon</option><option value="Europe/London">Europe/London</option><option value="Europe/Luxembourg">Europe/Luxembourg</option><option value="Europe/Madrid">Europe/Madrid</option><option value="Europe/Malta">Europe/Malta</option><option value="Europe/Minsk">Europe/Minsk</option><option value="Europe/Monaco">Europe/Monaco</option><option value="Europe/Moscow">Europe/Moscow</option><option value="Europe/Oslo">Europe/Oslo</option><option value="Europe/Paris">Europe/Paris</option><option value="Europe/Prague">Europe/Prague</option><option value="Europe/Riga">Europe/Riga</option><option value="Europe/Rome">Europe/Rome</option><option value="Europe/Samara">Europe/Samara</option><option value="Europe/Simferopol">Europe/Simferopol</option><option value="Europe/Sofia">Europe/Sofia</option><option value="Europe/Stockholm">Europe/Stockholm</option><option value="Europe/Tallinn">Europe/Tallinn</option><option value="Europe/Tirane">Europe/Tirane</option><option value="Europe/Uzhgorod">Europe/Uzhgorod</option><option value="Europe/Vaduz">Europe/Vaduz</option><option value="Europe/Vienna">Europe/Vienna</option><option value="Europe/Vilnius">Europe/Vilnius</option><option value="Europe/Volgograd">Europe/Volgograd</option><option value="Europe/Warsaw">Europe/Warsaw</option><option value="Europe/Zaporozhye">Europe/Zaporozhye</option><option value="Europe/Zurich">Europe/Zurich</option><option value="Indian/Antananarivo">Indian/Antananarivo</option><option value="Indian/Chagos">Indian/Chagos</option><option value="Indian/Christmas">Indian/Christmas</option><option value="Indian/Cocos">Indian/Cocos</option><option value="Indian/Comoro">Indian/Comoro</option><option value="Indian/Kerguelen">Indian/Kerguelen</option><option value="Indian/Mahe">Indian/Mahe</option><option value="Indian/Maldives">Indian/Maldives</option><option value="Indian/Mauritius">Indian/Mauritius</option><option value="Indian/Mayotte">Indian/Mayotte</option><option value="Indian/Reunion">Indian/Reunion</option><option value="Pacific/Apia">Pacific/Apia</option><option value="Pacific/Auckland">Pacific/Auckland</option><option value="Pacific/Chatham">Pacific/Chatham</option><option value="Pacific/Easter">Pacific/Easter</option><option value="Pacific/Efate">Pacific/Efate</option><option value="Pacific/Enderbury">Pacific/Enderbury</option><option value="Pacific/Fakaofo">Pacific/Fakaofo</option><option value="Pacific/Fiji">Pacific/Fiji</option><option value="Pacific/Funafuti">Pacific/Funafuti</option><option value="Pacific/Galapagos">Pacific/Galapagos</option><option value="Pacific/Gambier">Pacific/Gambier</option><option value="Pacific/Guadalcanal">Pacific/Guadalcanal</option><option value="Pacific/Guam">Pacific/Guam</option><option value="Pacific/Honolulu">Pacific/Honolulu</option><option value="Pacific/Johnston">Pacific/Johnston</option><option value="Pacific/Kiritimati">Pacific/Kiritimati</option><option value="Pacific/Kosrae">Pacific/Kosrae</option><option value="Pacific/Kwajalein">Pacific/Kwajalein</option><option value="Pacific/Majuro">Pacific/Majuro</option><option value="Pacific/Marquesas">Pacific/Marquesas</option><option value="Pacific/Midway">Pacific/Midway</option><option value="Pacific/Nauru">Pacific/Nauru</option><option value="Pacific/Niue">Pacific/Niue</option><option value="Pacific/Norfolk">Pacific/Norfolk</option><option value="Pacific/Noumea">Pacific/Noumea</option><option value="Pacific/Pago_Pago">Pacific/Pago_Pago</option><option value="Pacific/Palau">Pacific/Palau</option><option value="Pacific/Pitcairn">Pacific/Pitcairn</option><option value="Pacific/Port_Moresby">Pacific/Port_Moresby</option><option value="Pacific/Rarotonga">Pacific/Rarotonga</option><option value="Pacific/Saipan">Pacific/Saipan</option><option value="Pacific/Tahiti">Pacific/Tahiti</option><option value="Pacific/Tarawa">Pacific/Tarawa</option><option value="Pacific/Tongatapu">Pacific/Tongatapu</option><option value="Pacific/Wake">Pacific/Wake</option><option value="Pacific/Wallis">Pacific/Wallis</option></select>
                    <i class="fa fa-unlock" id="lockTimezone" title="Lock current Display Timezone setting, all graphs will open with this timezone"></i>
                    <i class="fa fa-heart" id="setFavTimezone" title="Remember current Display Timezone setting as your favorite"></i>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="checkbox" id="showTimezone">
                    <label title="This displays a label for the timezone on the graph." id="showTimezoneLabel" for="showTimezone">Show Label</label>
                    <input id="tzLabel" placeholder="Custom TZ label" title="Give Display Timezone a custom label">
                </td>
                <td>
                    <a href="#" id="setTimezoneToUtc" title="Set Display Timezone to UTC">UTC</a>
                    <a href="#" id="setTimezoneToSeattle" title="Set Display Timezone to US/Pacific">Seattle</a>
                    <a href="#" id="setTimezoneToFav" title="Set Display Timezone to your favorite (set using 'heart' icon)"></a>
                </td>
            </tr>
        </tbody></table>
    </div>
          </td>          <td class="topRight">&nbsp;</td>      </tr>      <tr>        <td class="bottomLeft">&nbsp;</td>        <td class="bottomRight">&nbsp;</td>      </tr>       </tbody></table>

                  <div class="sectionHeader generalOptionsHeader" id="generalOptionsHeader">
        <table><tbody><tr>
          <td width="99%" class="sectionHeaderTitle" onclick="MP.SectionHelper.toggleSectionVisibility('generalOptions');">
            <span class="expander expanderGrow"></span>General Options
          </td>
          <td class="headerRight"></td>
        </tr></tbody></table>
      </div>

      <table width="100%" cellspacing="0" cellpadding="0" border="0" class="sectionBox" id="generalOptions" style="display: none;">         <tbody><tr>          <td width="100%" class="topLeft"> 
    <table>
        <tbody><tr>
            <td class="graphOptionTitle">Title:</td>
            <td class="graphOptionCell">
                <input name="graphTitle" id="graphTitleInput" type="text">
            </td>
        </tr>
        <tr>
            <td class="graphOptionTitle">General:</td>
            <td class="graphOptionCell">
                <ul id="generalOptionsM">
                    <li class="previewOptionsLi graphOptionsItemClass">
                        <input type="checkbox" id="decoratePointsInput">
                        <label title="Sparse datapoints will be invisible unless this option is chosen." id="decoratePointsLabel" for="decoratePointsInput">Decorate Points</label>
                    </li>
                    <li class="previewOptionsLi graphOptionsItemClass">
                        <input type="checkbox" id="showXAxisLabelInput">
                        <label title="This enables a description of the plotted metric statistics." id="showXAxisLabelLabel" for="showXAxisLabelInput">X-Axis Label</label>
                    </li>
                    <li class="previewOptionsLi graphOptionsItemClass">
                        <input type="checkbox" id="showGapsInput">
                        <label title="Sparse datapoints will not have lines drawn between them if this option is switched on." id="showGapsLabel" for="showGapsInput">Show Gaps</label>
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td class="graphOptionTitle">Legend:</td>
            <td class="graphOptionCell">
                <ul id="timeOptionsM">
                    <li class="previewOptionsLi timeRangeOptionsItemClass">
                        <input type="checkbox" name="legendPlacement" id="showLegendInput">
                        <label title="Untick to hide the graph's legend (which shows the labels for all the metrics)" id="LegendOffLabel" for="showLegendInput">Show</label>
                    </li>
                    <li class="previewOptionsLi timeRangeOptionsItemClass">
                        <input type="checkbox" name="legendPlacement" id="showLegendErrorsInput">
                        <label title="Untick to hide any errors (NoMetric, NoData, processing error) in the legend" id="LegendErrorsOffLabel" for="showLegendErrorsInput">Errors</label>
                    </li>
                    <li class="previewOptionsLi timeRangeOptionsItemClass">
                        <input type="checkbox" name="splitLegend" id="splitLegendInput">
                        <label title="Tick to split the legend in two, for clarity, when left and right Y-axes are in use" id="SplitLegendOffLabel" for="splitLegendInput">Split</label>
                    </li>
                    <li class="previewOptionsLi timeRangeOptionsItemClass">
                        <input type="radio" name="legendPlacement" id="Legend_bottom">
                        <label title="Places the legend beneath the graph" id="LegendBottomLabel" for="Legend_bottom">Bottom</label>
                    </li>
                    <li class="previewOptionsLi timeRangeOptionsItemClass">
                        <input type="radio" name="legendPlacement" id="Legend_right">
                        <label title="Places the legend to the right of the graph" id="LegendBottomLabel" for="Legend_right">Right</label>
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td class="graphOptionTitle">Size:</td>
            <td class="graphOptionCell">
                <input type="checkbox" checked="" name="fit" id="fit">
                <label for="fit" title="Fit the graph to the available display area. If off the width and height settings (to the right) will be used." fit"="">Fit</label>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input title="Width of graph (in pixels)" type="text" id="widthInPixelsInput" size="4">
                x
                <input title="Height of graph (in pixels)" type="text" id="heightInPixelsInput" size="4">
                pixels
            </td>
        </tr>
        <tr>
            <td class="helpCursor graphOptionTitle" title="Vertical Lines">V Lines:</td>
            <td class="graphOptionCell">
                <input name="verticalLines" id="verticalLinesInput" type="text"><a href="#" class="lineEdit verticalLineEditor">editor...</a>
            </td>
        </tr>
        <tr>
            <td class="graphOptionTitle">Palette:</td>
            <td class="graphOptionCell textOptionCell">
                <select id="paletteInput">
                    <option value="default">Default</option>
                    <option value="cbf">Colorblind Friendly</option>
                    <option value="grey">Grayscale</option>
                    <option value="cloudwatch">CloudWatch</option>
                    <option value="nored">No Red</option>
                </select>
            </td>
        </tr>
    </tbody></table>
          </td>          <td class="topRight">&nbsp;</td>      </tr>      <tr>        <td class="bottomLeft">&nbsp;</td>        <td class="bottomRight">&nbsp;</td>      </tr>       </tbody></table> 

                  <div class="sectionHeader yAxisOptionsHeader" id="yAxisOptionsHeader">
        <table><tbody><tr>
          <td width="99%" class="sectionHeaderTitle" onclick="MP.SectionHelper.toggleSectionVisibility('yAxisOptions');">
            <span class="expander expanderGrow"></span>Y-Axis Options
          </td>
          <td class="headerRight"></td>
        </tr></tbody></table>
      </div>

      <table width="100%" cellspacing="0" cellpadding="0" border="0" class="sectionBox" id="yAxisOptions" style="display: none;">         <tbody><tr>          <td width="100%" class="topLeft"> 
    <div id="yaxis-Left" class="blah">
    <span class="optionsTitle">Left Axis:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<a href="#" class="toggleAxisLink">Right </a>]</span>
    <table>
        <tbody><tr>
            <td class="graphOptionTitle" title="Label for the axis.">Label:</td>
            <td class="graphOptionCell">
                <input name="labelLeft" id="labelLeft" type="text">
            </td>
        </tr>
        <tr>
            <td class="graphOptionTitle" title="List of horizontal lines, comma separated.">Lines:</td>
            <td class="graphOptionCell">
                <input name="horizontalLineLeft" id="horizontalLineLeft" type="text"><a href="#" class="lineEdit horizontalLineLeftEditor">editor...</a>
            </td>
        </tr>
        <tr>
            <td class="graphOptionTitle">General:</td>
            <td class="graphOptionCell">
                <ul id="generalOptionsM">
                    <li class="previewOptionsLi showYAxisItemClass">
                        <input type="checkbox" id="showYAxisLeft">
                        <label title="Show/Hide the Y Axis." for="showYAxisLeft">Show</label>
                    </li>
                    <li class="previewOptionsLi logScalingItemClass">
                        <input type="checkbox" id="logScalingLeft">
                        <label title="Use logarithmic scale for the axis." for="logScalingLeft">Log Scaling</label>
                    </li>
                    <li class="previewOptionsLi shrinkBoundsItemClass">
                        <input type="checkbox" id="shrinkBoundsToGraphDataLeft">
                        <label title="Automatically set axis limit to minimally include all data." for="shrinkBoundsToGraphDataLeft">Shrink Bounds</label>
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td title="Lower value for the graph axis" class="graphOptionTitle">Lower:</td>
            <td class="graphOptionCell">
                <input title="Lower bound for the graph axis (single numeric value)." type="text" id="lowerValueLeft" size="10">
                Bound
            </td>
        </tr>
        <tr>
            <td title="Upper value for the graph axis." class="graphOptionTitle">Upper:</td>
            <td class="graphOptionCell">
                <input title="Upper bound for the graph axis (single numeric value)." type="text" id="upperValueLeft" size="10">
                Bound&nbsp;
                <input title="Clip values for the graph axis (percent retained/margin)." type="text" id="clipUpperValueLeft" size="10">
                Clip&nbsp;
            </td>
        </tr>
    </tbody></table>
    </div>
    <div id="yaxis-Right" class="hidden">
    <span class="optionsTitle">Right Axis:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<a href="#" class="toggleAxisLink">Left </a>]</span>
    <table>
        <tbody><tr>
            <td class="graphOptionTitle" title="Label for the axis.">Label:</td>
            <td class="graphOptionCell">
                <input name="labelRight" id="labelRight" type="text">
            </td>
        </tr>
        <tr>
            <td class="graphOptionTitle" title="List of horizontal lines, comma separated.">Lines:</td>
            <td class="graphOptionCell">
                <input name="horizontalLineRight" id="horizontalLineRight" type="text"><a href="#" class="lineEdit horizontalLineRightEditor">editor...</a>
            </td>
        </tr>
        <tr>
            <td class="graphOptionTitle">General:</td>
            <td class="graphOptionCell">
                <ul id="generalOptionsM">
                    <li class="previewOptionsLi showYAxisItemClass">
                        <input type="checkbox" id="showYAxisRight">
                        <label title="Show/Hide the Y Axis." for="showYAxisRight">Show</label>
                    </li>
                    <li class="previewOptionsLi logScalingItemClass">
                        <input type="checkbox" id="logScalingRight">
                        <label title="Use logarithmic scale for the axis." for="logScalingRight">Log Scaling</label>
                    </li>
                    <li class="previewOptionsLi shrinkBoundsItemClass">
                        <input type="checkbox" id="shrinkBoundsToGraphDataRight">
                        <label title="Automatically set axis limit to minimally include all data." for="shrinkBoundsToGraphDataRight">Shrink Bounds</label>
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td title="Lower value for the graph axis" class="graphOptionTitle">Lower:</td>
            <td class="graphOptionCell">
                <input title="Lower bound for the graph axis (single numeric value)." type="text" id="lowerValueRight" size="10">
                Bound
            </td>
        </tr>
        <tr>
            <td title="Upper value for the graph axis." class="graphOptionTitle">Upper:</td>
            <td class="graphOptionCell">
                <input title="Upper bound for the graph axis (single numeric value)." type="text" id="upperValueRight" size="10">
                Bound&nbsp;
                <input title="Clip values for the graph axis (percent retained/margin)." type="text" id="clipUpperValueRight" size="10">
                Clip&nbsp;
            </td>
        </tr>
    </tbody></table>
    </div>
          </td>          <td class="topRight">&nbsp;</td>      </tr>      <tr>        <td class="bottomLeft">&nbsp;</td>        <td class="bottomRight">&nbsp;</td>      </tr>       </tbody></table> 

                  <div class="sectionHeader extraOptionsHeader" id="extraOptionsHeader">
        <table><tbody><tr>
          <td width="99%" class="sectionHeaderTitle" onclick="MP.SectionHelper.toggleSectionVisibility('extraOptions');">
            <span class="expander expanderGrow"></span>Metric Math / Extra Time Ranges
          </td>
          <td class="headerRight"><span onclick="window.open('https://w.amazon.com?Monitoring/Documentation/MonitoringPortal/iGraph#Extra_Options')" title="Help for options that can be set in Extra field (opens in a new window)" class="helpIcon"></span></td>
        </tr></tbody></table>
      </div>

      <table width="100%" cellspacing="0" cellpadding="0" border="0" class="sectionBox" id="extraOptions" style="display: none;">         <tbody><tr>          <td width="100%" class="topLeft"> 
 <table>
   <tbody><tr>
    <td>
      <select class="extraSelect" onchange="MP.ExtraOptions.addExtraFunction();" id="mathFunction">
        <option value="">+ Function</option>
            <option value="S1">S1</option>
            <option value="M1">M1</option>
            <option value="AVG(<metric list>)">AVG(&lt;metric list&gt;)</option>
            <option value="DATAPOINT_COUNT(<metric list>)">DATAPOINT_COUNT(&lt;metric list&gt;)</option>
            <option value="DT(<metric list>)">DT(&lt;metric list&gt;)</option>
            <option value="DY(<metric list>)">DY(&lt;metric list&gt;)</option>
            <option value="DYDT(<metric list>)">DYDT(&lt;metric list&gt;)</option>
            <option value="DY%(<metric list>)">DY%(&lt;metric list&gt;)</option>
            <option value="MAX(<metric list>)">MAX(&lt;metric list&gt;)</option>
            <option value="METRIC_COUNT(<metric list>)">METRIC_COUNT(&lt;metric list&gt;)</option>
            <option value="MIN(<metric list>)">MIN(&lt;metric list&gt;)</option>
            <option value="RUNNING_SUM(<metric list>)">RUNNING_SUM(&lt;metric list&gt;)</option>
            <option value="SORT(<metric list>)">SORT(&lt;metric list&gt;)</option>
            <option value="SUM(<metric list>)">SUM(&lt;metric list&gt;)</option>
            <option value="M1 / M2 * 100">M1 / M2 * 100</option>
            <option value="((M1 + M2) * (M3 + M4)) / M5">((M1 + M2) * (M3 + M4)) / M5</option>
      </select>
    </td>
     <td>
       <select class="extraSelect" onchange="MP.ExtraOptions.addExtraAggregation();" id="aggFunction">
        <option value="">+ Aggregation</option>
            <option value="average">average</option>
            <option value="minimum">minimum</option>
            <option value="maximum">maximum</option>
            <option value="median">median</option>
            <option value="sum">sum</option>
            <option value="weightedAverage">weightedAverage</option>
      </select>
    </td>
     <td>
       <a title="Add extra time range for doing 'period over period' comparisons" href="#" onclick="return MP.ExtraOptions.addExtraTimeRange();">+ Time Range</a>
     </td>
  </tr>
  <tr>
    <td class="extraFuncQuickLinks">
      <a class="extraFuncSumAll" href="#" onclick="return MP.ExtraOptions.sumAll();">Sum All</a>&nbsp;
      <a class="extraFuncAvgAll" href="#" onclick="return MP.ExtraOptions.avgAll();">Avg All</a>
    </td>
    <td></td>
    <td class="extraFuncQuickLinks">
       <a class="dayOverDay" title="Add Day over Day time range" href="#" onclick="return MP.ExtraOptions.addDayOverDayTimeRange();">Day/Day</a>&nbsp;
       <a class="weekOverWeek" title="Add Week over Week time range" href="#" onclick="return MP.ExtraOptions.addWeekOverWeekTimeRange();">Wk/Wk</a>
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <textarea id="extraEditor" onchange="MP.ExtraOptions.extraEditorChanged()" rows="6" wrap="off"></textarea>
    </td>
  </tr>
  <tr>
    <td colspan="3">
      <div id="functionUsageContainer" style="display:none;">
        <div id="functionUsageHeader" class="sectionHeader sectionHeaderTitle extraOptionsHeader" onclick="MP.SectionHelper.toggleSectionVisibility('functionUsage');">
          <span class="expander expanderGrow"></span>Function Usage - <span id="functionUsageTitle"></span>
        </div>
        <div id="functionUsage" style="display: none;">
          <div id="functionUsageContent">
          </div>
          <div id="functionUsageFooter">
             <div style="float:right; font-size:0.9em; padding-top:1em;">(<a id="functionUsageLink" href="https://w.amazon.com?Monitoring/Documentation/MonitorWebservice/MetricArithmetic#Functions" target="_blank">Detailed Help</a>)</div>
             <div style="clear: both;"> </div>
          </div>
        </div>
      </div>
    </td>
  </tr>
</tbody></table>
          </td>          <td class="topRight">&nbsp;</td>      </tr>      <tr>        <td class="bottomLeft">&nbsp;</td>        <td class="bottomRight">&nbsp;</td>      </tr>       </tbody></table>

            
      <div class="sectionHeader dashboardingHeader" id="dashboardingHeader">
        <table><tbody><tr>
          <td width="99%" class="sectionHeaderTitle" onclick="MP.SectionHelper.toggleSectionVisibility('dashboarding');">
            <span class="expander expanderGrow"></span>Dashboarding
          </td>
          <td class="headerRight"></td>
        </tr></tbody></table>
      </div>

      <table width="100%" cellspacing="0" cellpadding="0" border="0" class="sectionBox" id="dashboarding" style="display: none;">         <tbody><tr>          <td width="100%" class="topLeft"> 
    <ul class="dashboardingLinks">
        <li><a id="getGraphLink" href="/mws?Action=GetGraph&amp;Version=2007-07-07&amp;SchemaName1=Search&amp;Pattern1=marketplace%3D%24TEB9-MainSorterController%24%20req%20FL%20%3ALane%20schemaname%3DService%20NOT%20methodname%3D%24ALL%24%20NOT%20NON_OPERATIONAL&amp;Period1=OneMinute&amp;Stat1=n&amp;HeightInPixels=250&amp;WidthInPixels=600&amp;GraphTitle=FL%20Recirc%20by%20Lane&amp;DecoratePoints=true&amp;GraphType=pie&amp;TZ=America%2FNew_York@TZ%3A%20New%20York&amp;StartTime1=-PT2M&amp;EndTime1=-PT0H&amp;actionSource=dashboard" target="_blank">GetGraph</a></li>
        <li><a id="getMetricDataLink" href="/mws?Action=GetMetricData&amp;Version=2007-07-07&amp;SchemaName1=Search&amp;Pattern1=marketplace%3D%24TEB9-MainSorterController%24%20req%20FL%20%3ALane%20schemaname%3DService%20NOT%20methodname%3D%24ALL%24%20NOT%20NON_OPERATIONAL&amp;Period1=OneMinute&amp;Stat1=n&amp;HeightInPixels=250&amp;WidthInPixels=600&amp;GraphTitle=FL%20Recirc%20by%20Lane&amp;DecoratePoints=true&amp;GraphType=pie&amp;TZ=America%2FNew_York@TZ%3A%20New%20York&amp;StartTime1=-PT2M&amp;EndTime1=-PT0H&amp;actionSource=dashboard" target="_blank">GetMetricData</a></li>
        <li><a id="dataTableLink" href="/mws/data?Action=GetGraph&amp;Version=2007-07-07&amp;SchemaName1=Search&amp;Pattern1=marketplace%3D%24TEB9-MainSorterController%24%20req%20FL%20%3ALane%20schemaname%3DService%20NOT%20methodname%3D%24ALL%24%20NOT%20NON_OPERATIONAL&amp;Period1=OneMinute&amp;Stat1=n&amp;HeightInPixels=250&amp;WidthInPixels=600&amp;GraphTitle=FL%20Recirc%20by%20Lane&amp;DecoratePoints=true&amp;GraphType=pie&amp;TZ=America%2FNew_York@TZ%3A%20New%20York&amp;StartTime1=-PT2M&amp;EndTime1=-PT0H" target="_blank">Data Table</a></li>
        <li><a id="csvLink" href="/mws?Action=GetGraph&amp;Version=2007-07-07&amp;SchemaName1=Search&amp;Pattern1=marketplace%3D%24TEB9-MainSorterController%24%20req%20FL%20%3ALane%20schemaname%3DService%20NOT%20methodname%3D%24ALL%24%20NOT%20NON_OPERATIONAL&amp;Period1=OneMinute&amp;Stat1=n&amp;HeightInPixels=250&amp;WidthInPixels=600&amp;GraphTitle=FL%20Recirc%20by%20Lane&amp;DecoratePoints=true&amp;GraphType=pie&amp;TZ=America%2FNew_York@TZ%3A%20New%20York&amp;StartTime1=-PT2M&amp;EndTime1=-PT0H&amp;OutputFormat=CSV_TRANSPOSE">CSV</a></li>
          <li>Import from:
            <a id="blackMirrorLink" href="https://blackmirror-portal.corp.amazon.com/request?SchemaName1=Search&amp;Pattern1=marketplace%3D%24TEB9-MainSorterController%24%20req%20FL%20%3ALane%20schemaname%3DService%20NOT%20methodname%3D%24ALL%24%20NOT%20NON_OPERATIONAL&amp;Period1=OneMinute&amp;Stat1=n&amp;HeightInPixels=250&amp;WidthInPixels=600&amp;GraphTitle=FL%20Recirc%20by%20Lane&amp;DecoratePoints=true&amp;GraphType=pie&amp;TZ=America%2FNew_York@TZ%3A%20New%20York&amp;StartTime1=-PT2M&amp;EndTime1=-PT0H" target="_blank">DCA</a> |
            <a id="blackMirrorLckLink" href="https://blackmirror-portal.corp.amazon.com/request?mvpRegion=lck&amp;SchemaName1=Search&amp;Pattern1=marketplace%3D%24TEB9-MainSorterController%24%20req%20FL%20%3ALane%20schemaname%3DService%20NOT%20methodname%3D%24ALL%24%20NOT%20NON_OPERATIONAL&amp;Period1=OneMinute&amp;Stat1=n&amp;HeightInPixels=250&amp;WidthInPixels=600&amp;GraphTitle=FL%20Recirc%20by%20Lane&amp;DecoratePoints=true&amp;GraphType=pie&amp;TZ=America%2FNew_York@TZ%3A%20New%20York&amp;StartTime1=-PT2M&amp;EndTime1=-PT0H" target="_blank">LCK</a> |
            <a id="blackMirrorApaLink" href="https://blackmirror-portal.corp.amazon.com/request?mvpRegion=apa&amp;SchemaName1=Search&amp;Pattern1=marketplace%3D%24TEB9-MainSorterController%24%20req%20FL%20%3ALane%20schemaname%3DService%20NOT%20methodname%3D%24ALL%24%20NOT%20NON_OPERATIONAL&amp;Period1=OneMinute&amp;Stat1=n&amp;HeightInPixels=250&amp;WidthInPixels=600&amp;GraphTitle=FL%20Recirc%20by%20Lane&amp;DecoratePoints=true&amp;GraphType=pie&amp;TZ=America%2FNew_York@TZ%3A%20New%20York&amp;StartTime1=-PT2M&amp;EndTime1=-PT0H" target="_blank">APA</a>
          </li>
    </ul>
    <span class="yui-button yui-push-button" id="wikiButton"><span class="first-child"><button type="button" tabindex="0" title="Get graph link to put into corporate Wiki, for building dashboards" id="wikiButton-button">Wiki...</button></span></span>
      <span class="yui-button yui-push-button" id="cloudwatchButton"><span class="first-child"><button type="button" tabindex="0" title="Convert iGraph to CloudWatch graph" id="cloudwatchButton-button">CloudWatch Graph...</button></span></span>
          </td>          <td class="topRight">&nbsp;</td>      </tr>      <tr>        <td class="bottomLeft">&nbsp;</td>        <td class="bottomRight">&nbsp;</td>      </tr>       </tbody></table>

        </div>
        <div class="clearFloat"></div>
    </div>
</div>

<script>
    MP.sectionBegin = "      <table width='100%' cellspacing='0' cellpadding='0' border='0' class='sectionBox' id='id' style='display: ;'>         <tbody><tr>          <td width='100%' class='topLeft'>";
    MP.sectionEnd = "          </td>          <td class='topRight'> </td>      </tr>      <tr>        <td class='bottomLeft'> </td>        <td class='bottomRight'> </td>      </tr>       </tbody></table>";
</script>


        <div class="sectionHeader metricSearchHeader" id="metricSearchHeader">
        <table><tbody><tr>
          <td width="99%" class="sectionHeaderTitle" onclick="MP.SectionHelper.toggleSectionVisibility('metricSearch');">
            <span class="expanderShrink expander"></span>Search for Metrics
          </td>
          <td class="headerRight">      <ul class="globalFeatureContainer">
          <li>
            <a class="resetLayout" href="#" title="Reset visibility of controls and height of graph">Reset Layout</a>
          </li>
          
          <li>
              <input type="checkbox" name="autoSubmitSearch" id="autoSubmitSearch" value="1" checked="checked">
              <label for="autoSubmitSearch" title="Controls whether edits are automatically submitted">Auto Submit</label>
          </li>
          <li class="linkToThisPageClass"><a id="linkToThisSearch" href="">Link to this search</a>
              <em>[</em><a id="linkToThisSearchTiny" href="https://tiny/" target="_blank">tiny</a><em>]</em></li>
          <li class="helpLink"><span class="helpIcon" title="Display help for iGraph page (opens in a new window)" onclick="window.open('https://w.amazon.com?Monitoring/Documentation/MonitoringPortal/iGraph')"></span></li>

      </ul>
</td>
        </tr></tbody></table>
      </div>

  <a name="searchSection"></a>
  <div id="metricSearch">
    <div id="topTabView">
      <div class="searchBox">
        <div id="searchContainer">
          <div id="searchTab">
            <form id="igraphForm" action="/igraph/search" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="✓">
                <table class="clearFloat searchTable">
                  <tbody><tr>
                    <td>
                      <table class="searchTable">
                        <tbody><tr>
                          <td class="searchText">
                            <div id="searchInputAndProgress">
                              <img id="searchProgressSpinner" class="spinner hidden" src="/images/spinner-big.gif">
                              <textarea name="search" id="search" onkeypress="return MP.IgraphPage.submitSearchOnEnter(event)" onfocus="return MP.SearchString.focus(event)"></textarea>
                            </div>
                          </td>
                          <td class="searchStatus">
                            <ul class="searchStatus">
                              <li>
                                <select name="maxResults" id="maxResults" onchange="return MP.IgraphPage.submitSearchIfAutoOn()"><option selected="selected" value="50">50</option>
<option value="100">100</option>
<option value="200">200</option>
<option value="500">500</option></select>
                                results.
                                &nbsp;<input type="checkbox" name="autoSizeResults" id="autoSizeResults" value="1" checked="checked">
                                <label for="autoSizeResults" title="Controls whether results table columns are auto-sized to the data">Auto
                                  Size</label>
                              </li>
                              <li id="searchResultMessage">
                                <span id="resultMessage"></span>
                              </li>
                              <li id="searchAndGraphResults">
                                <button id="searchAndGraphButton" type="submit" class="bigButton lightButton hidden" onclick="return MP.IgraphPage.graphSearchPattern();" value="submit">
                                  <span>Graph Search Pattern</span></button>
                              </li>
                            </ul>
                          </td>
                        </tr>
                      </tbody></table>
                    </td>
                    <td class="searchControlsCell">
                      <button id="searchMetricsButton" type="submit" class="bigButton" onclick="return MP.IgraphPage.submitSearch();" value="submit">
                        <span>Search for Metrics</span></button>
                      <a class="graphHistory graphHistoryBack" href="javascript:history.back()" title="Go back to previous iGraph action"></a>
                      <a class="graphHistory graphHistoryForward" href="javascript:history.forward()" title="Go forward to next iGraph action"></a>
                            <div class="sectionHeader searchControlsHeader" id="searchControlsHeader">
        <table><tbody><tr>
          <td width="99%" class="sectionHeaderTitle" onclick="MP.SectionHelper.toggleSectionVisibility('searchControls');">
            <span class="expander expanderGrow"></span>Search Controls
          </td>
          <td class="headerRight"></td>
        </tr></tbody></table>
      </div>

                            <table width="100%" cellspacing="0" cellpadding="0" border="0" class="sectionBox" id="searchControls" style="display: none;">         <tbody><tr>          <td width="100%" class="topLeft">
                      <ul class="searchShortcuts">
                        <li class="searchShortcutItem searchHelpers">
                          <div id="searchHelpers" class="yuimenubar yuimenubarnav yui-module yui-overlay visible" style="z-index: 2; position: static; display: block; visibility: visible;">
    <div class="bd">
        <ul class="first-of-type">
            <li class="yuimenubaritem first-of-type yuimenubaritem-hassubmenu" id="yui-gen3" groupindex="0" index="0">
                <a class="yuimenubaritemlabel yuimenubaritemlabel-hassubmenu" href="#schemasHelper">Schemas</a>
            </li>
            <li class="yuimenubaritem yuimenubaritem-hassubmenu" id="yui-gen4" groupindex="0" index="1">
                <a class="yuimenubaritemlabel yuimenubaritemlabel-hassubmenu" href="#snitchHelper">Snitch</a>
            </li>
            <li class="yuimenubaritem yuimenubaritem-hassubmenu" id="yui-gen5" groupindex="0" index="2">
                <a class="yuimenubaritemlabel yuimenubaritemlabel-hassubmenu" href="#othersHelper">Others</a>
            </li>
        </ul>
    </div>
</div>

                        </li>
                        <li class="searchShortcutItem">
                          <span class="yui-button yui-push-button" id="searchAllButton"><span class="first-child"><button type="button" tabindex="0" title="Search each metric schema, one after another, for your search string" id="searchAllButton-button">Search Each</button></span></span>
                          <span class="yui-button yui-push-button" id="cancelSearchAllButton" style="display: none;"><span class="first-child"><button type="button" tabindex="0" title="Cancel searching all schemas" id="cancelSearchAllButton-button">Cancel</button></span></span>
                        </li>
                      </ul>
                                </td>          <td class="topRight">&nbsp;</td>      </tr>      <tr>        <td class="bottomLeft">&nbsp;</td>        <td class="bottomRight">&nbsp;</td>      </tr>       </tbody></table>
                    </td>
                    <td>
                    </td>
                  </tr>
                  <tr>
    <td colspan="2">
        <div class="periodStats">
            <div>
                <table id="graphDefaults">
                    <tbody><tr>
                        <th>
                            Defaults
                        </th>
                        <td>
                            <span title="These are the default stats used when adding metrics below to the graph above">Stats:</span>
                            <a id="statList" onclick="MP.util.toggleSlide('#statOptions')">avg</a>
                        </td>
                        <td class="noBorder">
                            <span title="This is the default period used when adding metrics below to the graph above">Period:</span>
                        </td>
                        <td>
                            <ul id="periodsOptions"><li class="previewOptionsLi periodOptionsItemClass"><input id="OneMinuteInput" type="radio" name="periodOptions" onclick="return MP.GraphOptions._optionChanged('periodOptions')"><label for="OneMinuteInput" id="OneMinuteLabel">1 Min</label></li><li class="previewOptionsLi periodOptionsItemClass"><input id="FiveMinuteInput" type="radio" name="periodOptions" checked="" onclick="return MP.GraphOptions._optionChanged('periodOptions')"><label for="FiveMinuteInput" id="FiveMinuteLabel">5 Min</label></li><li class="previewOptionsLi periodOptionsItemClass"><input id="OneHourInput" type="radio" name="periodOptions" onclick="return MP.GraphOptions._optionChanged('periodOptions')"><label for="OneHourInput" id="OneHourLabel">1 Hr</label></li><li class="previewOptionsLi periodOptionsItemClass"><input id="OneDayInput" type="radio" name="periodOptions" onclick="return MP.GraphOptions._optionChanged('periodOptions')"><label for="OneDayInput" id="OneDayLabel">1 Day</label></li><li class="previewOptionsLi periodOptionsItemClass"><input id="OneWeekInput" type="radio" name="periodOptions" onclick="return MP.GraphOptions._optionChanged('periodOptions')"><label for="OneWeekInput" id="OneWeekLabel">1 Wk</label></li></ul>
                        </td>
                        <td class="defaultLiveData">
                            <label>
                            <input type="checkbox" id="defaultLiveData">
                            <span title="Always display most recent data, even when not yet fully aggregated">Live Data</span>
                            </label>
                        </td>
                        <td class="noBorder">
                            <span title="This is the Y-Axis on which metrics below will be displayed when added to the graph above">Y-Axis:</span>
                        </td>
                        <td>
                            <input id="defaultYAxisLeft" checked="" type="radio" name="defaultYAxis">
                            <label for="defaultYAxisLeft">left</label>
                            <input id="defaultYAxisRight" type="radio" name="defaultYAxis">
                            <label for="defaultYAxisRight">right</label>
                        </td>
                        <td class="noBorder">
                            <span title="This is the default units used when adding metrics below to the graph above">Units:</span>
                        </td>
                        <td class="noBorder">
                            <span id="defaultUnitsValue"><select name="defaultValueUnits" id="defaultValueUnits"><option value="nanosecond" +="">nanosecond</option><option value="microsecond" +="">microsecond</option><option value="millisecond" +="">millisecond</option><option value="second" +="">second</option><option value="minute" +="">minute</option><option value="hour" +="">hour</option><option value="day" +="">day</option><option value="week" +="">week</option><option value="byte" +="">byte</option><option value="kilobyte" +="">kilobyte</option><option value="megabyte" +="">megabyte</option><option value="gigabyte" +="">gigabyte</option><option value="terabyte" +="">terabyte</option><option value="kibibyte" +="">kibibyte</option><option value="mebibyte" +="">mebibyte</option><option value="gibibyte" +="">gibibyte</option><option value="tebibyte" +="">tebibyte</option><option value="cpuSecond" +="">cpuSecond</option><option value="request" +="">request</option><option value="page" +="">page</option><option value="order" +="">order</option><option value="percent" +="">percent</option><option value="file" +="">file</option><option value="none" +="" selected="">none</option></select></span></td>
                    </tr>
                </tbody></table>
                 <div class="clearFloat"></div>
             </div>
             <div id="statOptionsWrapper">
                 <div id="statOptions" class="hidden">
                     <div class="statSection" id="mainStats">
                         <ul>
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="avgInput">
        <label id="avgLabel" for="avgInput" class="" title="">avg</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="sumInput">
        <label id="sumLabel" for="sumInput" class="" title="">sum</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="nInput">
        <label id="nLabel" for="nInput" class="" title="">n</label>
      </li>

                             </ul>
                     </div>
                     <div class="statSection" id="pStats">
                         <ul>
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="p100Input">
        <label id="p100Label" for="p100Input" class="" title="">p100</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="p99_99Input">
        <label id="p99_99Label" for="p99_99Input" class="" title="">p99.99</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="p99_9Input">
        <label id="p99_9Label" for="p99_9Input" class="" title="">p99.9</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="p99Input">
        <label id="p99Label" for="p99Input" class="" title="">p99</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="p90Input">
        <label id="p90Label" for="p90Input" class="" title="">p90</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="p50Input">
        <label id="p50Label" for="p50Input" class="" title="">p50</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="p10Input">
        <label id="p10Label" for="p10Input" class="" title="">p10</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="p0Input">
        <label id="p0Label" for="p0Input" class="" title="">p0</label>
      </li>

                             </ul>
                     </div>
                     <div class="statSection" id="ouStats">
                         <ul>
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="o1000Input">
        <label id="o1000Label" for="o1000Input" class="" title="">o1000</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="o2000Input">
        <label id="o2000Label" for="o2000Input" class="" title="">o2000</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="o3500Input">
        <label id="o3500Label" for="o3500Input" class="" title="">o3500</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="o6000Input">
        <label id="o6000Label" for="o6000Input" class="" title="">o6000</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="u1000Input">
        <label id="u1000Label" for="u1000Input" class="" title="">u1000</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="u2000Input">
        <label id="u2000Label" for="u2000Input" class="" title="">u2000</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="u3500Input">
        <label id="u3500Label" for="u3500Input" class="" title="">u3500</label>
      </li>

                             
                                       <li>
        <input type="checkbox" onclick="return MP.GraphOptions.statOptionChanged()" id="u6000Input">
        <label id="u6000Label" for="u6000Input" class="" title="">u6000</label>
      </li>

                             </ul>
                     </div>
                     <div>
                             <span class="helpIcon" title="Help for stats and their meaning (opens in a new window)" onclick="window.open('https://w.amazon.com?Monitoring/Documentation/MonitorWebservice/Reference/MetricStatistic')">
                             </span>
                     </div>
                     <div class="clearFloat"></div>
                 </div>
             </div>
         </div>
    </td>
</tr>
<script>
    // Share definition with Javascript
    MP.METRIC_STATISTIC_HELP = "https://w.amazon.com?Monitoring/Documentation/MonitorWebservice/Reference/MetricStatistic";
</script>
                </tbody></table>
</form>          </div>
        </div>
      </div>
    </div>
    <div id="noSearchResults" class="error" style="display: none;">
Your search did not match any metrics.  If your metric is <i>new</i> then reasons it may not be found include:
<ul>
  <li>Your service may not be configured correctly.</li>
  <li>Your metric may not be emitting enough datapoints.</li>
  <li>Your metric is being published in a non-Prod Apollo environment.</li>
  <li>Your metric name contains illegal characters and is being rejected by the system.</li>
  <li>You have two different stages of the same Apollo environment on the one host.</li>
</ul>
<p>
If you are sure your metric exists then likely reasons why you could not find it include:
</p><ul>
  <li>Your search syntax is incorrect. For example 'myservice' does not match metrics called 'MyServiceName'.
		Please see our <a href="https://w.amazon.com?Monitoring/Documentation/MonitoringWebService/Cookbook/SearchPattern" target="_blank">iGraph Search Pattern Cookbook</a>.</li>
  <li>Your metric may not be emitting enough datapoints and has been deleted recently.</li>
</ul>
  For more information please read the <a href="https://w.amazon.com?Monitoring/Docs/KnowledgeBase/WheresMyMetric" target="_blank">Where's My Metric FAQ</a>.
<div style="margin-top:15px">
  Not finding metrics created using <b>csm.amazon.com</b>? Troubleshoot with the <a target="_blank" href="https://csm.amazon.com/#/missingmetrics">CSM Missing Metrics Tool</a>.
</div>
</div>

    <!-- Tabs and results -->
    <div id="metricResultsTabContainer" class="yui-navset yui-navset-top yui-resize">
      <ul id="metricResultsTabs" class="yui-nav">
      </ul>
      <div id="metricResultsTables">
      </div>
      <div id="notIcon" class="hidden notIcon" style="display: none;"></div>
    <div class="yui-content"></div><div id="yui-gen0" class="yui-resize-handle yui-resize-handle-b"><div class="yui-resize-handle-inner-b"></div></div></div>
  </div>

<!-- Various icons that appear on hover, invisible initially -->
<div id="columnWidenIcon" class="hidden columnWidenIcon columnIcons" style="display: none;"></div>
<div id="columnNarrowIcon" class="hidden columnNarrowIcon columnIcons" style="display: none;"></div>
<div id="columnRemoveIcon" class="hidden columnRemoveIcon columnIcons" style="display: none;"></div>

<script type="text/javascript" src="/javascripts/lib/opentip/opentip-jquery.min.js"></script>
</div>

        </div>
        <div id="ft"></div>
      </div>

      <div id="footer">
                  <div class="cpright">
              © 2008 - 2022 Amazon.com, Inc.&nbsp;&nbsp;All rights reserved.
          </div>
          <script>
              // is-it-down health for MWS
              isItDownStripe('mws', 820, 1);
          </script>

      </div>

    

<div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all ui-helper-hidden-accessible"></div><div hidden=""><div style="width: 100%; height: 100%; position: relative;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><defs><clipPath id="id-32"></clipPath><filter id="filter-id-37" filterUnits="objectBoundingBox" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs></svg></div></div></body></html>