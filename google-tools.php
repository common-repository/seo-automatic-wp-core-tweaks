<?php
function google_tools_display() {
?>
<style>
.tabcontent { display: none; }
#mainpage { display: block; }
ul.tab li a:focus, .active { background-color: #fff; }
</style>
    <div class="wrap">
     
        <div id="icon-themes" class="icon32"></div>
        <h2>Google Tools</h2>
         

<h2 class="nav-tab-wrapper">
  <a href="javascript:void(0)" class="nav-tab tablinks" onclick="openTab(event, 'mainpage')">Main</a>
  <a href="https://analytics.google.com/" target="_blank" class="nav-tab tablinks" onclick="openTab(event, 'GoogleAnalytics')">Google Analytics</a>
  <a href="https://adwords.google.com/" target="_blank" class="nav-tab tablinks" onclick="openTab(event, 'GoogleAdwords')">Google Adwords</a>
  <a href="https://business.google.com/" target="_blank" class="nav-tab tablinks" onclick="openTab(event, 'GoogleMyBusiness')">Google My Business</a>
  <a href="https://www.google.com/webmasters/tools/home?hl=en" target="_blank" class="nav-tab tablinks" onclick="openTab(event, 'GoogleSearchConsole')">Google Search Console</a>
</h2>

<div id="mainpage" class="tabcontent">
  <h3>Main Tab Content</h3>
  <p>This is the tab I'm not sure if you wanted the current core tweaks admin page content to show on or if you have different content in mind. Without this tab, the initial landing tab would be the google analytics one so they would have to click something in the content to open the analytics page the first time.</p>
</div>

<div id="GoogleAnalytics" class="tabcontent">
  <h3><a href="https://analytics.google.com/" target="_blank">View Google Analytics</a></h3>
  <p></p>
</div>

<div id="GoogleAdwords" class="tabcontent">
  <h3><a href="https://adwords.google.com/" target="_blank">View Google Adwords</a></h3>
  <p></p>
</div>

<div id="GoogleMyBusiness" class="tabcontent">
  <h3><a href="https://business.google.com/" target="_blank">View Google My Business</a></h3>
  <p></p>
</div>

<div id="GoogleSearchConsole" class="tabcontent">
  <h3><a href="https://www.google.com/webmasters/tools/home?hl=en" target="_blank">View Google Search Console</a></h3>
  <p></p>
</div>


<script>
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
         
    </div><!-- /.wrap -->
<?php
}
google_tools_display()
?>