    <!-- START CONTENT SECTION FOR INDIVIDUAL PAGES -->
<?php
include 'includes/Fheader.php'; 
?>

<h2 class="pageID"><i class="<?=$logo ?>"></i> <?=$PageID ?></h2>
    
<main>

<h1>Night Owl Mecantile</h1>
<!-- Isotope - filtering with search field and button filters - a Pen by Dave DeSandro (codepen.io/pen/mCdbD) -->

<!--Copyright (c) 2019 by Dave DeSandro (https://codepen.io/desandro/pen/mCdbD)

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

-->
<p><input type="text" id="quicksearch" placeholder="Search" /></p>

<div id="filters" class="button-group">
  <button class="button is-checked" data-filter="*">show all</button>
  <button class="button" data-filter=".metal">metal</button>
  <button class="button" data-filter=".transition">transition</button>
  <button class="button" data-filter=".alkali, .alkaline-earth">alkali and alkaline-earth</button>
  <button class="button" data-filter=":not(.transition)">not transition</button>
  <button class="button" data-filter=".metal:not(.transition)">metal but not transition</button>
</div>


<div class="grid">
  
  <ul class="gridder">
            <!-- <div class="element-item transition metal " data-category="transition"> -->
                <li class="gridder-list transition metal " data-category="transition" data-griddercontent="#gridder-content-1">
                    <img src="https://fakeimg.pl/100/100/?text=1" class="img-fluid">
                     <p>CLEVER ITEM NAME<br>
                    <strong>$7.99</strong></p>
                </li>
            <!-- </div> -->
            <div class="element-item metalloid " data-category="metalloid">
                <li class="gridder-list" data-griddercontent="#gridder-content-2">
                    <img src="https://fakeimg.pl/100/100/?text=2" class="img-fluid">
                     <p>CLEVER ITEM NAME<br>
                    <strong>$7.99</strong></p>
                </li>
            </div>
            <div class="element-item post-transition metal " data-category="post-transition">
                <li class="gridder-list" data-griddercontent="#gridder-content-3">
                    <img src="https://fakeimg.pl/100/100/?text=3" class="img-fluid">
                     <p>CLEVER ITEM NAME<br>
                    <strong>$7.99</strong></p>
                </li>
            </div>
            <div class="element-item post-transition metal " data-category="post-transition">
                <li class="gridder-list" data-griddercontent="#gridder-content-4">
                    <img src="https://fakeimg.pl/100/100/?text=4" class="img-fluid">
                    <p>CLEVER ITEM NAME<br>
                    <strong>$7.99</strong></p>
                </li>
            </div>
            <div class="element-item transition metal " data-category="transition">
                <li class="gridder-list" data-griddercontent="#gridder-content-5">
                    <img src="https://fakeimg.pl/100/100/?text=5" class="img-fluid">
                     <p>CLEVER ITEM NAME<br>
                    <strong>$7.99</strong></p>
                </li>
            </div>
            <div class="element-item alkali metal " data-category="alkali">
                <li class="gridder-list" data-griddercontent="#gridder-content-6">
                    <img src="https://fakeimg.pl/100/100/?text=6" class="img-fluid">
                     <p>CLEVER ITEM NAME<br>
                    <strong>$7.99</strong></p>
                </li>
            </div>
    </ul>                
    <!-- <h3 class="name">Mercury</h3>
    <p class="symbol">Hg</p>
    <p class="number">80</p>
    <p class="weight">200.59</p> -->
  
  
    <!-- <h3 class="name">Tellurium</h3>
    <p class="symbol">Te</p>
    <p class="number">52</p>
    <p class="weight">127.6</p> -->
 
  <!--
    <h3 class="name">Bismuth</h3>
    <p class="symbol">Bi</p>
    <p class="number">83</p>
    <p class="weight">208.980</p>
  </div>
 
    <h3 class="name">Lead</h3>
    <p class="symbol">Pb</p>
    <p class="number">82</p>
    <p class="weight">207.2</p>
  
    <h3 class="name">Gold</h3>
    <p class="symbol">Au</p>
    <p class="number">79</p>
    <p class="weight">196.967</p>
  
    <h3 class="name">Potassium</h3>
    <p class="symbol">K</p>
    <p class="number">19</p>
    <p class="weight">39.0983</p>
  </div> -->
  <div class="element-item alkali metal " data-category="alkali">
    <h3 class="name">Sodium</h3>
    <p class="symbol">Na</p>
    <p class="number">11</p>
    <p class="weight">22.99</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Cadmium</h3>
    <p class="symbol">Cd</p>
    <p class="number">48</p>
    <p class="weight">112.411</p>
  </div>
  <div class="element-item alkaline-earth metal " data-category="alkaline-earth">
    <h3 class="name">Calcium</h3>
    <p class="symbol">Ca</p>
    <p class="number">20</p>
    <p class="weight">40.078</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Rhenium</h3>
    <p class="symbol">Re</p>
    <p class="number">75</p>
    <p class="weight">186.207</p>
  </div>
  <div class="element-item post-transition metal " data-category="post-transition">
    <h3 class="name">Thallium</h3>
    <p class="symbol">Tl</p>
    <p class="number">81</p>
    <p class="weight">204.383</p>
  </div>
  <div class="element-item metalloid " data-category="metalloid">
    <h3 class="name">Antimony</h3>
    <p class="symbol">Sb</p>
    <p class="number">51</p>
    <p class="weight">121.76</p>
  </div>
  <div class="element-item transition metal " data-category="transition">
    <h3 class="name">Cobalt</h3>
    <p class="symbol">Co</p>
    <p class="number">27</p>
    <p class="weight">58.933</p>
  </div>
  <div class="element-item lanthanoid metal inner-transition " data-category="lanthanoid">
    <h3 class="name">Ytterbium</h3>
    <p class="symbol">Yb</p>
    <p class="number">70</p>
    <p class="weight">173.054</p>
  </div>
  <div class="element-item noble-gas nonmetal " data-category="noble-gas">
    <h3 class="name">Argon</h3>
    <p class="symbol">Ar</p>
    <p class="number">18</p>
    <p class="weight">39.948</p>
  </div>
  <div class="element-item diatomic nonmetal " data-category="diatomic">
    <h3 class="name">Nitrogen</h3>
    <p class="symbol">N</p>
    <p class="number">7</p>
    <p class="weight">14.007</p>
  </div>
  <div class="element-item actinoid metal inner-transition " data-category="actinoid">
    <h3 class="name">Uranium</h3>
    <p class="symbol">U</p>
    <p class="number">92</p>
    <p class="weight">238.029</p>
  </div>
  <div class="element-item actinoid metal inner-transition " data-category="actinoid">
    <h3 class="name">Plutonium</h3>
    <p class="symbol">Pu</p>
    <p class="number">94</p>
    <p class="weight">(244)</p>
  </div>
</div>



<div id="gridder-content-1" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="http://fakeimg.pl/600/600/?text=1" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>Item 1</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                    </div>
                </div>
            </div>
            <div id="gridder-content-2" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="http://fakeimg.pl/600/600/?text=2" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>Item 2</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                    </div>
                </div>
            </div>
            <div id="gridder-content-3" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="http://fakeimg.pl/600/600/?text=3" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>Item 3</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                       <a href="http://www.google.com" target ="_blank" title="test link">Test Link</a>
                        <ul>
                          <li>description: gold</li>
                          <li>description: gold</li>
                          <li>materials: gold</li>
                          <li>cost: $7.99 ea</li>
                          <button>Purchase</button>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="gridder-content-4" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="http://fakeimg.pl/600/600/?text=4" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>Item 4</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                    </div>
                </div>
            </div>
            <div id="gridder-content-5" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="http://fakeimg.pl/600/600/?text=5" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>Item 6</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                    </div>
                </div>
            </div>
            <div id="gridder-content-6" class="gridder-content">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="http://fakeimg.pl/600/600/?text=6" class="img-fluid" />
                    </div>
                    <div class="col-sm-6">
                        <h2>Item 6</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ex augue, hendrerit sed gravida ut, mattis vel tortor. Duis hendrerit sagittis bibendum. Fusce massa risus, hendrerit et est vitae, convallis accumsan ipsum. Integer vitae erat mattis, ornare tortor nec, luctus turpis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Suspendisse finibus fermentum consectetur. Nulla vestibulum, diam ut finibus dictum, justo felis blandit mi, sed rhoncus tortor augue vitae orci. Fusce semper eu ante ut faucibus.</p>
                    </div>
                </div>
            </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js" type="text/javascript"></script>
    <script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js" type="text/javascript"></script>
    <script src="js/isotope/isotope.js"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="gridder-master/dist/js/jquery.gridder.js"></script>
        <script>
            jQuery(document).ready(function ($) {

                // REMOVE AND ADD CLICK EVENT 
                $('.doAddItem').on('click', function () {
                    $(".gridder").data('gridderExpander').gridderAddItem('TEST');
                });

                // Call Gridder
                $(".gridder").gridderExpander({
                    scrollOffset: 60,
                    scrollTo: "panel", // "panel" or "listitem"
                    animationSpeed: 400,
                    animationEasing: "easeInOutExpo",
                    onStart: function () {
                        console.log("Gridder Inititialized");
                    },
                    onExpanded: function (object) {
                        console.log("Gridder Expanded");
                    },
                    onChanged: function (object) {
                        console.log("Gridder Changed");
                    },
                    onClosed: function () {
                        console.log("Gridder Closed");
                    }
                });
            });
        </script>

 <!--END CONTENT SECTION FOR INDIVIDUAL PAGES -->

 <?php include 'includes/Ffooter.php'; ?>