<style>
    .logo-header,
    #share {
        display: inline-block
    }
</style>

<!--must replace doc root-->
<?php include $_SERVER['DOCUMENT_ROOT']."/seo-tools/nav.html" ?>
    <ol class="nav navbar-nav navbar-right desktop breadcrumb-custom">
        <li class="yah"><i class="fa fa-map-marker"></i><i>You are here:</i></li>
        <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
        <li><a href="/seo-tools/"><i class="fa fa-wrench"></i>SEO Tools</a></li>
        <li class="current"><a href="/seo-tools/fetch-render/" class="animated bounceIn"><i class="fa fa-code"></i>Schema Markup Helper</a></li>
    </ol>
    </div>
    </div>
    </div>

    <!--Navigation Tabs -->
    <div class="">
        <h1><i class="fa fa-code"></i>Schema Markup Helper Tool</h1>

        <ul class="nav nav-tabs">
            <li class="active"><a href="#product-schema" onclick="return false;" data-toggle="tab">Product</a></li>
            <li><a href="#article-schema" onclick="return false;" data-toggle="tab">Article</a></li>
            <li><a href="#breadcrumb-schema" onclick="return false;" data-toggle="tab">Breadcrumb</a></li>
            <li><a href="#event-schema" onclick="return false;" data-toggle="tab">Event</a></li>
            <li><a href="#itemlist-schema" onclick="return false;" data-toggle="tab">Itemlist</a></li>
            <li><a href="#local-business-schema" onclick="return false;" data-toggle="tab">Local Business</a></li>
            <li><a href="#organization-schema" onclick="return false;" data-toggle="tab">Organization</a></li>
            <li><a href="#recipe-schema" onclick="return false;" data-toggle="tab">Recipe</a></li>
            <li><a href="#website-schema" onclick="return false;" data-toggle="tab">Website</a></li>
            <li><a href="#question-schema" onclick="return false;" data-toggle="tab">Question</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="product-schem">
                <h2>Product Schema</h2>
                <h4>Fill in the textbox below. The JSON-LD and Microdata below will update. Then copy the text and paste the following code into <a href="https://search.google.com/structured-data/testing-tool/u/0/">Google's Stuctured Data Testing Tool</a>!</h4>
                <!--Required markup input text boxes-->
                <div class="center-block">
                    <input class="center-block" type="text" ng-model="productname" placeholder="Product Name">
                    <input class="center-block" type="text" ng-model="productimage" placeholder="Product Image URL (include http://)">
                    <input class="center-block" type="text" ng-model="productdescription" placeholder="Product Description">
                    <input class="center-block" type="text" ng-model="productbrand" placeholder="Brand Name">
                    <input class="center-block" type="text" ng-model="productprice" placeholder="Product Price (# only, no $ sign)">
                </div>

                <!--Availability Options - Hidden-->
                <div class="availability-options" style="display:none">
                    <br>
                    <select id="Pavailability-block" class="center-block" style="width:70%">
                        <option value="Select Option">Select Option Below:</option>
                        <option value="PDiscontinued">Discontinued</option>
                        <option value="PInStock">InStock</option>
                        <option value="PInStoreOnly">InStoreOnly</option>
                        <option value="PLimitedAvailability">LimitedAvailability</option>
                        <option value="POnlineOnly">OnlineOnly</option>
                        <option value="POutOfStock">OutOfStock</option>
                        <option value="PPreOrder">PreOrder</option>
                        <option value="PPreSale">PreSale</option>
                        <option value="PSoldOut">SoldOut</option>
                    </select>
                </div>
                <!--Aggregate Rating Options - Hidden-->
                <div class="Paggregate-rating" style="display:none">
                    <input class="center-block" type="text" ng-model="productratingvalue" placeholder="Average of all Ratings">
                    <input class="center-block" type="text" ng-model="productratingcount" placeholder="# of Reviews">
                    <input class="center-block" type="text" ng-model="productbestrating" placeholder="Top potential rating score">
                </div>
                <!--Price Valid Until Options - Hidden-->
                <div class="Psale" style="display:none">
                    <input class="center-block" type="text" ng-model="productmonth" placeholder="Price valid until Month (in ##, include zero for single digit months)">
                    <input class="center-block" type="text" ng-model="productdate" placeholder="Price valid until Day (in ##, include zero for single digit days)">
                    <input class="center-block" type="text" ng-model="productyear" placeholder="Price valud until Year (ex. 2017)">
                </div>

                <!-- Item Condition Options - Hidden-->
                <div class="condition-options" style="display:none">
                    <br>
                    <select id="condition-block" class="center-block" style="width:70%">
                        <option value="Select Option">Select Option Below:</option>
                        <option value="DamagedCondition">DamagedCondition</option>
                        <option value="NewCondition">NewCondition</option>
                        <option value="RefurbishedCondition">RefurbishedCondition</option>
                        <option value="UsedCondition">UsedCondition</option>
                    </select>
                </div>

                <!-- SKU, GS1, and MPN - Hidden-->
                <span class="sku" style="display:none"><input class="center-block" type="text" ng-model="productsku" placeholder="SKU #"></span>
                <span class="gtin8" style="display:none"><input class="center-block" type="text" ng-model="productgtin8" placeholder="GTIN-8 # - Global Trade Item Number, also known as EAN/UCC-8 or 8-digit EAN"></span>
                <span class="gtin13" style="display:none"><input class="center-block" type="text" ng-model="productgtin13" placeholder="GTIN-13 # - 13-digit ISBN codes and EAN UCC-13"></span>
                <span class="gtin14" style="display:none"><input class="center-block" type="text" ng-model="productgtin14" placeholder="GTIN-14 # - 14-digit ISBN codes and EAN UCC-14"></span>
                <span class="mpn" style="display:none"><input class="center-block" type="text" ng-model="productmpn" placeholder="MPN # - The Manufacturer Part Number"></span>

                <br>

                <!--buttons for additional itemprops-->
                <div class="row" style="text-align:center">
                    <div class="col-md-3">
                        <button type="button" id="availability" class="btn btn-primary btn-lg">+Availability</button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" id="Paggregate-rating-button" class="btn btn-primary btn-lg">+Aggregate Rating</button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" id="sale-button" class="btn btn-primary btn-lg">+Sale</button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" id="condition-button" class="btn btn-primary btn-lg">+Item Condition</button>
                    </div>
                </div>
                <br>
                <div class="row" style="text-align:center">
                    <div class="col-md-2 col-md-offset-1">
                        <button type="button" id="sku" class="btn btn-success btn-lg">+sku</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" id="gtin8" class="btn btn-success btn-lg">+gtin8</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" id="gtin13" class="btn btn-success btn-lg">+gtin13</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" id="gtin14" class="btn btn-success btn-lg">+gtin14</button>
                    </div>
                    <div class="col-md-2">
                        <button type="button" id="mpn" class="btn btn-success btn-lg">+mpn</button>
                    </div>
                </div>
                <hr>

                <h4>JSON-LD:</h4>
                <p>
                    <br>&nbsp; &lt;script type="application/ld+json"&gt;
                    <br>&nbsp; {
                    <br>&nbsp;&nbsp;&nbsp; "@context": "http://schema.org/",
                    <br>&nbsp;&nbsp;&nbsp; "@type": "Product",
                    <br>&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{productname}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "image": "<span class="element">{{productimage}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "description": "<span class="element">{{productdescription}}</span>",
                    <!--SKU, GTIN, MPU #-->
                    <span style="display:none" class="sku"><br>&nbsp;&nbsp;&nbsp; "sku": "<span class="element">{{productsku}}</span>",</span>
                    <span style="display:none" class="gtin8"><br>&nbsp;&nbsp;&nbsp; "gtin8": "<span class="element">{{productgtin8}}</span>",</span>
                    <span style="display:none" class="gtin13"><br>&nbsp;&nbsp;&nbsp; "gtin13": "<span class="element">{{productgtin13}}</span>",</span>
                    <span style="display:none" class="gtin14"><br>&nbsp;&nbsp;&nbsp; "gtin14": "<span class="element">{{productgtin14}}</span>",</span>
                    <span style="display:none" class="mpn"><br>&nbsp;&nbsp;&nbsp; "mpn": "<span class="element">{{productmpn}}</span>",</span>

                    <br>&nbsp;&nbsp;&nbsp; "brand": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "Thing",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{productbrand}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },
                    <!-- Aggregate Rating -->
                    <span style="display:none" class="Paggregate-rating">
                  <br>&nbsp;&nbsp;&nbsp; "aggregateRating": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "AggregateRating",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   "ratingValue": "<span class="element">{{productratingvalue}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "reviewCount": "<span class="element">{{productratingcount}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "bestRating": "<span class="element">{{productbestrating}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },
                    </span>

                    <br>&nbsp;&nbsp;&nbsp; "offers": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "Offer",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "priceCurrency": "USD",

                    <!--Availability-->
                    <span style="display:none" class="PDiscontinued"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/Discontinued</span>",</span>
                    <span style="display:none" class="PInStock"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/InStock</span>",</span>
                    <span style="display:none" class="PInStoreOnly"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/InStoreOnly</span>",</span>
                    <span style="display:none" class="PLimitedAvailability"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/LimitedAvailability</span>",</span>
                    <span style="display:none" class="POnlineOnly"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/OnlineOnly</span>",</span>
                    <span style="display:none" class="POutOfStock"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/OutOfStock</span>",</span>
                    <span style="display:none" class="PPreOrder"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/PreOrder</span>",</span>
                    <span style="display:none" class="PPreSale"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/PreSale</span>",</span>
                    <span style="display:none" class="PSoldOut"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/SoldOut</span>",</span>

                    <!--Price Valid Until -->
                    <span style="display:none" class="Psale"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "priceValidUntil": "<span class="element">{{productyear}}-{{productmonth}}-{{productdate}}</span>",</span>

                    <!--Condition-->
                    <span style="display:none" class="DamagedCondition"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "itemCondition": "<span class="element">http://schema.org/DamagedCondition</span>",</span>
                    <span style="display:none" class="NewCondition"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "itemCondition": "<span class="element">http://schema.org/NewCondition</span>",</span>
                    <span style="display:none" class="RefurbishedCondition"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "itemCondition": "<span class="element">http://schema.org/RefurbishedCondition</span>",</span>
                    <span style="display:none" class="UsedCondition"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "itemCondition": "<span class="element">http://schema.org/UsedCondition</span>",</span>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "price": "<span class="element">{{productprice}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;}
                    <br>&nbsp; &lt;/script&gt;
                </p>

                <hr>

                <h4>Microdata:</h4>
                <h5><b>Note:</b> This microdata is only a sample for demonstrative purposes. Microdata should be wrapped around elements within your HTML page.</h5>
                <p>
                    <br>&nbsp; &lt;div itemscope itemtype="http://schema.org/Product"&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="brand"&gt;<span class="element">{{productbrand}}</span>&lt;/span&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="name"&gt;<span class="element">{{productname}}</span>&lt;/span&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;img itemprop="image" src="<span class="element">{{productimage}}</span>"/&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="description"&gt;<span class="element">{{productdescription}}</span>
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    <!--SKU, GTIN, MPU #-->
                    <span style="display:none" class="sku"><br>&nbsp;&nbsp;&nbsp; &lt;meta itemprop="sku" content="<span class="element">{{productsku}}</span>" /&gt;</span>
                    <span style="display:none" class="gtin8"><br>&nbsp;&nbsp;&nbsp; &lt;meta itemprop="gtin8" content="<span class="element">{{productgtin8}}</span>" /&gt;</span>
                    <span style="display:none" class="gtin13"><br>&nbsp;&nbsp;&nbsp; &lt;meta itemprop="gtin13" content="<span class="element">{{productgtin13}}</span>" /&gt;</span>
                    <span style="display:none" class="gtin14"><br>&nbsp;&nbsp;&nbsp; &lt;meta itemprop="gtin14" content="<span class="element">{{productgtin14}}</span>" /&gt;</span>
                    <span style="display:none" class="mpn"><br>&nbsp;&nbsp;&nbsp; &lt;meta itemprop="mpn" content="<span class="element">{{productmpn}}</span>" /&gt;</span>

                    <!--Aggregate Rating-->
                    <span style="display:none" class="Paggregate-rating">
              <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating"&gt;
              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;span itemprop="ratingValue"&gt;<span class="element">{{productratingvalue}}</span>&lt;/span&gt; stars, based on
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="reviewCount"&gt;<span class="element">{{productratingcount}}</span>&lt;/span&gt; reviews
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="bestRating" content="<span class="element">{{productbestrating}}"</span> /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    </span>

                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="offers" itemscope itemtype="http://schema.org/Offer"&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="priceCurrency" content="USD" /&gt;
                    <!-- Avalability-->
                    <span style="display:none" class="Discontinued"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/Discontinued</span>" /&gt;</span>
                    <span style="display:none" class="PInStock"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/InStock</span>" /&gt;</span>
                    <span style="display:none" class="PInStoreOnly"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/InStoreOnly</span>" /&gt;</span>
                    <span style="display:none" class="PLimitedAvailability"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/LimitedAvailability</span>" /&gt;</span>
                    <span style="display:none" class="POnlineOnly"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/OnlineOnly</span>" /&gt;</span>
                    <span style="display:none" class="POutOfStock"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/OutOfStock</span>" /&gt;</span>
                    <span style="display:none" class="PPreOrder"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/PreOrder</span>" /&gt;</span>
                    <span style="display:none" class="PPreSale"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/PreSale</span>" /&gt;</span>
                    <span style="display:none" class="PSoldOut"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/SoldOut</span>" /&gt;</span>

                    <!--Price Valid Until -->
                    <span style="display:none" class="Psale"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="priceValidUntil" content="<span class="element">{{productyear}}-{{productmonth}}-{{productdate}}</span>&gt;Sale Ends: {{productmonth}}-{{productdate}}-{{productyear}}&lt;span&gt;</span>

                    <!-- Condition -->
                    <span style="display:none" class="DamagedCondition"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="itemCondition" content="<span class="element">http://schema.org/DamagedCondition</span>" /&gt;</span>
                    <span style="display:none" class="NewCondition"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="itemCondition" content="<span class="element">http://schema.org/NewCondition</span>" /&gt;</span>
                    <span style="display:none" class="RefurbishedCondition"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="itemCondition" content="<span class="element">http://schema.org/RefurbishedCondition</span>" /&gt;</span>
                    <span style="display:none" class="UsedCondition"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="itemCondition" content=""<span class="element">http://schema.org/UsedCondition</span>" /&gt;</span>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $&lt;span itemprop="price"&gt;<span class="element">{{productprice}}</span>&lt;/span&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    <br>&nbsp; &lt;/div&gt;
                </p>

                <hr>

                <h4>More on Product Schema:</h4>
                <p>
                    <ul>
                        <li><a href="https://developers.google.com/search/docs/data-types/products">Google's Product Structured Data Documentation</a></li>
                        <li><a href="http://schema.org/Product">Schema.org's Product Documentation</a></li>
                    </ul>
                </p>
            </div>
            <!--product-->
            <div class="tab-pane" id="article-schema">
                <h2>Article Schema</h2>
                <h4>Fill in the textbox below. The JSON-LD and Microdata below will update. Then copy the text and paste the following code into <a href="https://search.google.com/structured-data/testing-tool/u/0/">Google's Stuctured Data Testing Tool</a>!</h4>
                <!--Required markup input text boxes-->
                <div class="center-block">
                    <input class="center-block" type="text" ng-model="headline" placeholder="Article's headline">
                    <input class="center-block" type="text" ng-model="descriptionarticle" placeholder="Description of article">
                    <input class="center-block" type="text" ng-model="urlarticle" placeholder="Article's URL">
                    <input class="center-block" type="text" ng-model="imagearticle" placeholder="Image for Article">
                    <input class="center-block" type="text" ng-model="heightimage" placeholder="Image's Height (required for AMP pages)">
                    <input class="center-block" type="text" ng-model="widthimage" placeholder="Image's Width (required for AMP pages)">
                    <input class="center-block" type="text" ng-model="yearpublished" placeholder="Year published (ex. 2017)">
                    <input class="center-block" type="text" ng-model="monthpublished" placeholder="Month published (ex. 01)">
                    <input class="center-block" type="text" ng-model="daypublished" placeholder="Day published (ex. 17)">
                    <input class="center-block" type="text" ng-model="nameauthor" placeholder="Name of author or organization">
                    <input class="center-block" type="text" ng-model="namepublisher" placeholder="Publisher's name">
                    <input class="center-block" type="text" ng-model="imagelogo" placeholder="Publisher's logo">
                    <input class="center-block" type="text" ng-model="heightlogo" placeholder="Logos's Height (required for AMP pages)">
                    <input class="center-block" type="text" ng-model="widthlogo" placeholder="Logo's Width (required for AMP pages)">
                    <br>
                    <h4>Select Author Type:</h4>
                    <select id="author" class="center-block" style="width:70%">
                        <option value="Select Option">Select Option Below:</option>
                        <option value="person">Person</option>
                        <option value="organization">Organization</option>
                    </select>
                    <span style="display:none" class="datemodified">
                  <input class="center-block" type="text" ng-model="yearmodified" placeholder="Year modified (ex. 2017)">
                  <input class="center-block" type="text" ng-model="monthmodified" placeholder="Month modified (ex. 02)">
                  <input class="center-block" type="text" ng-model="daymodified" placeholder="Day modified (ex. 19)">
              </span>
                </div>
                <!--buttons-->
                <br>
                <div style="text-align:center">
                    <button type="button" id="datemodified" class="btn btn-info btn-lg">+Date Modified</button>
                </div>

                <hr>
                <!--JSON-LD-->
                <h4>JSON-LD</h4>
                <h5>Note: If you are closed on Sunday or weekends, you will have to remove a comma after the last OpeningHoursSpecification's object.</h5>
                <p>
                    <br>&nbsp; &lt;script type="application/ld+json"&gt;
                    <br>&nbsp; {
                    <br>&nbsp;&nbsp;&nbsp; "@context": "http://schema.org/",
                    <br>&nbsp;&nbsp;&nbsp; "@type": "Article",
                    <br>&nbsp;&nbsp;&nbsp; "headline": "<span class="element">{{headline}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "description": "<span class="element">{{descriptionarticle}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "mainEntityOfPage": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "WebPage",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@id": "<span class="element">{{urlarticle}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },
                    <br>&nbsp;&nbsp;&nbsp; "image": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "ImageObject",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "url": "<span class="element">{{imagearticle}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "height": "<span class="element">{{heightimage}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "width": "<span class="element">{{widthimage}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },
                    <br>&nbsp;&nbsp;&nbsp; "datePublished": "<span class="element">{{yearpublished}}</span>-<span class="element">{{monthpublished}}</span>-<span class="element">{{daypublished}}</span>",
                    <span style="display:none" class="datemodified"><br>&nbsp;&nbsp;&nbsp;  "dateModified": "<span class="element">{{yearmodified}}</span>-<span class="element">{{monthmodified}}</span>-<span class="element">{{daymodified}}",</span></span>

                    <br>&nbsp;&nbsp;&nbsp; "author": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "<span class="element"><span style="display:none" class="personauthor">Person</span><span style="display:none" class="organizationauthor">Organization</span></span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{nameauthor}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },
                    <br>&nbsp;&nbsp;&nbsp; "publisher": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "Organization",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{namepublisher}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "logo": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "ImageObject",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "url": "<span class="element">{{imagelogo}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "height": "<span class="element">{{heightlogo}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "width": "<span class="element">{{widthlogo}}</span>"
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;}
                    <br>&nbsp; &lt;/script&gt;
                </p>

                <hr>
                <!--Microdata -->
                <h4>Microdata:</h4>
                <h5><b>Note:</b> This microdata is only a sample for demonstrative purposes. Microdata should be wrapped around elements within your HTML page.</h5>
                <p>
                    <br>&nbsp; &lt;div itemscope itemtype="http://schema.org/Article"&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="headline"&gt;<span class="element">{{headline}}</span>&lt;/span&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="description"&gt;<span class="element">{{descriptionarticle}}</span>&lt;span&gt;

                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="mainEntityOfPage" itemscope itemtype="http://schema.org/WebPage" &gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="url" content="<span class="element">{{urlarticle}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;

                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="image" itemscope itemtype="http://schema.org/ImageObject" &gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img itemprop="url" content="<span class="element">{{imagearticle}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="height" content="<span class="element">{{heightimage}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="width" content="<span class="element">{{widthimage}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;

                    <br>&nbsp;&nbsp;&nbsp; &lt;meta itemprop="datePublished" content="<span class="element">{{yearpublished}}</span>-<span class="element">{{monthpublished}}</span>-<span class="element">{{daypublished}}</span>" /&gt;
                    <span style="display:none" class="datemodified"><br>&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="dateModified" content="<span class="element">{{yearmodified}}</span>-<span class="element">{{monthmodified}}</span>-<span class="element">{{daymodified}}"</span></span> /&gt;</span>

                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="author" itemscope itemtype="http://schema.org/<span class="element"><span style="display:none" class="personauthor">Person</span><span style="display:none" class="organizationauthor">Organization</span></span>" &gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="name" content="<span class="element">{{nameauthor}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;

                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="publisher" itemscope itemtype="http://schema.org/Organization" &gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="name" content="<span class="element">{{namepublisher}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="logo" itemscope itemtype="http://schema.org/ImageObject" &gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img itemprop="url" content="<span class="element">{{imagelogo}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="height" content="<span class="element">{{heightlogo}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="width" content="<span class="element">{{widthlogo}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    <br>&nbsp; &lt;/div&gt;
                </p>
                <hr>
                <h4>More on Article Schema:</h4>
                <p>
                    <ul>
                        <li><a href="https://developers.google.com/search/docs/data-types/articles">Google's Article Structured Data Documentation</a></li>
                        <li><a href="http://schema.org/Article">Schema.org's Article Documentation</a></li>
                    </ul>
                </p>

            </div>
            <!--article schema-->
            <div class="tab-pane" id="breadcrumb-schema">
                <h2>BreadcrumbList Schema</h2>
                <h4>Fill in the textbox below. The JSON-LD and Microdata below will update. Then copy the text and paste the following code into <a href="https://search.google.com/structured-data/testing-tool/u/0/">Google's Stuctured Data Testing Tool</a>!</h4>
                <!--Required markup input text boxes-->
                <div class="center-block">

                    <!--urls/names-->
                    <input class="center-block" type="text" ng-model="id1" placeholder="#1st/Highest URL in Heirarchy (include http://)">
                    <input class="center-block" type="text" ng-model="name1" placeholder="Page #1's Name">
                    <span style="display:none" class="img1"><input class="center-block" type="text" ng-model="img1" placeholder="Page #1's Image"></span>

                    <input class="center-block" type="text" ng-model="id2" placeholder="#2nd URL in Heirarchy (include http://)">
                    <input class="center-block" type="text" ng-model="name2" placeholder="Page #2's Name">
                    <span style="display:none" class="img2"><input class="center-block" type="text" ng-model="img2" placeholder="Page #2's Image"></span>

                    <input class="center-block" type="text" ng-model="id3" placeholder="#3rd URL in Heirarchy (include http://)">
                    <input class="center-block" type="text" ng-model="name3" placeholder="Page #3's Name">
                    <span style="display:none" class="img3"><input class="center-block" type="text" ng-model="img3" placeholder="Page #3's Image"></span>

                    <span style="display:none" class="listitem4">
              <input class="center-block" type="text" ng-model="id4" placeholder="#4th URL in Heirarchy (include http://)">
                      <input class="center-block" type="text" ng-model="name4" placeholder="Page #4's Name">
                      <span style="display:none" class="img4"><input class="center-block" type="text" ng-model="img4" placeholder="Page #4's Image"></span>
                    </span>

                    <span style="display:none" class="listitem5">
              <input class="center-block" type="text" ng-model="id5" placeholder="#5th URL in Heirarchy (include http://)">
                      <input class="center-block" type="text" ng-model="name5" placeholder="Page #5's Name">
                      <span style="display:none" class="img5"><input class="center-block" type="text" ng-model="img5" placeholder="Page #5's Image"></span>
                    </span>

                </div>

                <!--buttons-->
                <!-- images -->
                <br>
                <div class="row" style="text-align:center">
                    <button type="button" id="img1" class="btn btn-warning btn-lg">+Image for URL #1</button>
                    <button type="button" id="img2" class="btn btn-warning btn-lg">+Image for URL #2</button>
                    <button type="button" id="img3" class="btn btn-warning btn-lg">+Image for URL #3</button>
                    <span style="display:none" class="listitem4"><button type="button" id="img4" class="btn btn-warning btn-lg">+Image for URL #4</button></span>
                    <span style="display:none" class="listitem5"><button type="button" id="img5" class="btn btn-warning btn-lg">+Image for URL #5</button></span>
                </div>
                <br>
                <div class="row" style="text-align:center">
                    <button type="button" id="listitem4" class="btn btn-primary btn-lg">+New List Item</button>
                    <button type="button" id="listitem5" class="btn btn-primary btn-lg">+New List Item</button>
                </div>
                <!-- new list item -->

                <hr>
                <!--JSON-LD-->
                <h4>JSON-LD</h4>
                <p>
                    <br>&nbsp; &lt;script type="application/ld+json"&gt;
                    <br>&nbsp; {
                    <br>&nbsp;&nbsp;&nbsp; "@context": "http://schema.org/",
                    <br>&nbsp;&nbsp;&nbsp; "@type": "BreadcrumbList",
                    <br>&nbsp;&nbsp;&nbsp; "itemListElement": [{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "ListItem",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "position": "1",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "item": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@id": "<span class="element">{{id1}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{name1}}</span>"<span style="display:none" class="img1">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   "image": "<span class="element">{{img1}}</span>"</span>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;&nbsp;&nbsp; },{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "ListItem",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "position": "2",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "item": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@id": "<span class="element">{{id2}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{name2}}</span>"<span style="display:none" class="img2">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   "image": "<span class="element">{{img2}}</span>"</span>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;&nbsp;&nbsp; },{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "ListItem",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "position": "3",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "item": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@id": "<span class="element">{{id3}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{name3}}</span>"<span style="display:none" class="img3">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   "image": "<span class="element">{{img3}}</span>"</span>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;&nbsp;&nbsp; }<span style="display:none" class="listitem4">,{
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "ListItem",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   "position": "4",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    "item": {
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@id": "<span class="element">{{id4}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{name4}}</span>"<span style="display:none" class="img4">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   "image": "<span class="element">{{img4}}</span>"</span>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;&nbsp;&nbsp; }</span><span style="display:none" class="listitem5">,{
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "ListItem",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   "position": "5",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    "item": {
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@id": "<span class="element">{{id5}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{name5}}</span>"<span style="display:none" class="img5">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   "image": "<span class="element">{{img5}}</span>"</span>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;&nbsp;&nbsp; }</span>
                    <br>&nbsp;&nbsp;&nbsp; ]
                    <br>&nbsp;}
                    <br>&nbsp; &lt;/script&gt;
                </p>

                <hr>
                <!--Microdata -->
                <h4>Microdata:</h4>
                <h5><b>Note:</b> This microdata is only a sample for demonstrative purposes. Microdata should be wrapped around elements within your HTML page.</h5>
                <p>
                    <br>&nbsp; &lt;ol itemscope itemtype="http://schema.org/BreadcrumbList"&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" &gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="position" content="1" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="<span class="element">{{id1}}</span>"&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="name"&gt;<span class="element">{{name1}}</span>&lt;/span&gt;
                    <span style="display:none" class="img1"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;img itemprop="image" src="<span class="element">{{img1}}</span>"/&gt;</span>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/a&gt;&lt;/li&gt; ›
                    <br>&nbsp;&nbsp;&nbsp; &lt;li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" &gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="position" content="2" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="<span class="element">{{id2}}</span>"&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="name"&gt;<span class="element">{{name2}}</span>&lt;/span&gt;
                    <span style="display:none" class="img2"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;img itemprop="image" src="<span class="element">{{img2}}</span>"/&gt;</span>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/a&gt;&lt;/li&gt; ›
                    <br>&nbsp;&nbsp;&nbsp; &lt;li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" &gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="position" content="3" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="<span class="element">{{id3}}</span>"&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="name"&gt;<span class="element">{{name3}}</span>&lt;/span&gt;
                    <span style="display:none" class="img3"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;img itemprop="image" src="<span class="element">{{img3}}</span>"/&gt;</span>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/a&gt;&lt;/li&gt;<span style="display:none" class="listitem4">›
              <br>&nbsp;&nbsp;&nbsp;   &lt;li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" &gt;
              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="position" content="4" /&gt;
              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="<span class="element">{{id4}}</span>"&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="name"&gt;<span class="element">{{name4}}</span>&lt;/span&gt;
                    <span style="display:none" class="img4"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;img itemprop="image" src="<span class="element">{{img4}}</span>"/&gt;</span>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/a&gt;&lt;/li&gt;</span><span style="display:none" class="listitem5">›
              <br>&nbsp;&nbsp;&nbsp;   &lt;li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" &gt;
              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="position" content="5" /&gt;
              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;a itemscope itemtype="http://schema.org/Thing" itemprop="item" href="<span class="element">{{id5}}</span>"&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="name"&gt;<span class="element">{{name5}}</span>&lt;/span&gt;
                    <span style="display:none" class="img5"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;img itemprop="image" src="<span class="element">{{img5}}</span>"/&gt;</span>
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/a&gt;&lt;/li&gt;</span>
                    <br>&nbsp; &lt;/ol&gt;
                </p>

                <hr>
                <h4>More on BreadcrumbList Schema:</h4>
                <p>
                    <ul>
                        <li><a href="https://developers.google.com/search/docs/data-types/breadcrumbs">Google's BreadcrumbList Structured Data Documentation</a></li>
                        <li><a href="http://schema.org/BreadcrumbList">Schema.org's BreadcrumbList Documentation</a></li>
                    </ul>
                </p>
            </div>
            <!--breadcrumbs-->
            <div class="tab-pane" id="event-schema">
                <h2>Event Schema</h2>
                <h4>Fill in the textbox below. The JSON-LD and Microdata below will update. Then copy the text and paste the following code into <a href="https://search.google.com/structured-data/testing-tool/u/0/">Google's Stuctured Data Testing Tool</a>!</h4>
                <!--Required markup input text boxes-->
                <div class="center-block">
                    <input class="center-block" type="text" ng-model="eventname" placeholder="Event's name">
                    <input class="center-block" type="text" ng-model="eventdescription" placeholder="Description of event">
                    <input class="center-block" type="text" ng-model="eventimage" placeholder="Image of event">
                    <input class="center-block" type="text" ng-model="eventurl" placeholder="URL for event">
                    <input class="center-block" type="text" ng-model="eventyearstart" placeholder="Year event starts (ex. 2017)">
                    <input class="center-block" type="text" ng-model="eventmonthstart" placeholder="Month event starts (ex. 01)">
                    <input class="center-block" type="text" ng-model="eventdaystart" placeholder="Day event starts (ex. 18)">
                    <input class="center-block" type="text" ng-model="eventhourstart" placeholder="Hour event starts (millitary hour)">
                    <input class="center-block" type="text" ng-model="eventminutestart" placeholder="Minute of the hour event starts">
                    <span style="display:none" class="enddate">
                  <input class="center-block" type="text" ng-model="eventyearend" placeholder="The year in which the event ends (20XX)">
                  <input class="center-block" type="text" ng-model="eventmonthend" placeholder="Month event ends (ex. 01)">
                  <input class="center-block" type="text" ng-model="eventdayend" placeholder="Day event ends (ex. 21)">
                  <input class="center-block" type="text" ng-model="eventhourend" placeholder="Hour event ends (millitary hour)">
                  <input class="center-block" type="text" ng-model="eventminuteend" placeholder="Minute of the hour event ends">
              </span>
                    <input class="center-block" type="text" ng-model="eventnamelocation" placeholder="Location's Name (ex. PNC Park)">
                    <input class="center-block" type="text" ng-model="eventstreetaddress" placeholder="Street Address">
                    <input class="center-block" type="text" ng-model="eventaddresslocality" placeholder="State (spelled out)">
                    <input class="center-block" type="text" ng-model="eventaddressregion" placeholder="State (abbreviation)">
                    <input class="center-block" type="text" ng-model="eventpostalcode" placeholder="Zip Code">
                    <input class="center-block" type="text" ng-model="eventaddresscountry" placeholder="Country">

                    <!-- Person or Performing Group -->
                    <div class="performer" style="display:none">
                        <br>
                        <select id="performeroptions" class="center-block" style="width:70%">
                            <option value="Select Option">Select Performer Option Below:</option>
                            <option value="person">Person</option>
                            <option value="performinggroup">Performing Group</option>
                        </select>
                        <input class="center-block" type="text" ng-model="eventnameperformer" placeholder="Name of Performer or Performing Group">

                    </div>

                    <!--Offers-->
                    <div class="offers" style="display:none">
                        <input class="center-block" type="text" ng-model="eventprice" placeholder="Event Price (# only, no $ sign)">
                        <input class="center-block" type="text" ng-model="eventurloffer" placeholder="URL's offer">

                        <!--Price Valid Until Options - Hidden-->
                        <div class="sale" style="display:none">
                            <input class="center-block" type="text" ng-model="eventyearvalid" placeholder="Price valud until Year (ex. 2017)">
                            <input class="center-block" type="text" ng-model="eventmonthvalid" placeholder="Price valid until Month (in ##, include zero for single digit months)">
                            <input class="center-block" type="text" ng-model="eventdatevalid" placeholder="Price valid until Day (in ##, include zero for single digit days)">
                        </div>
                        <!--Availability Options - Hidden-->
                        <div class="availability-options" style="display:none" style="width:70%">
                            <br>
                            <select id="availability-block" class="center-block">
                                <option value="Select Option">Select Option Below:</option>
                                <option value="Discontinued">Discontinued</option>
                                <option value="InStock">InStock</option>
                                <option value="InStoreOnly">InStoreOnly</option>
                                <option value="LimitedAvailability">LimitedAvailability</option>
                                <option value="OnlineOnly">OnlineOnly</option>
                                <option value="OutOfStock">OutOfStock</option>
                                <option value="PreOrder">PreOrder</option>
                                <option value="PreSale">PreSale</option>
                                <option value="SoldOut">SoldOut</option>
                            </select>
                        </div>

                    </div>
                </div>

                <!--buttons-->
                <br>
                <div style="text-align:center">
                    <button type="button" id="enddate" class="btn btn-info btn-lg">+End Date</button>
                    <button type="button" id="performer" class="btn btn-info btn-lg">+Performer(s)</button>
                    <button type="button" id="offers" class="btn btn-info btn-lg">+Offers/Price</button>

                    <div class="offers" style="display:none">
                        <br>
                        <button type="button" id="sale" class="btn btn-default btn-lg">+Price Valid Until</button>
                        <button type="button" id="availability" class="btn btn-default btn-lg">+Availability</button>
                    </div>
                </div>

                <hr>
                <!--JSON-LD-->
                <h4>JSON-LD</h4>
                <h5>Note: If you are closed on Sunday or weekends, you will have to remove a comma after the last OpeningHoursSpecification's object.</h5>
                <p>
                    <br>&nbsp; &lt;script type="application/ld+json"&gt;
                    <br>&nbsp; {
                    <br>&nbsp;&nbsp;&nbsp; "@context": "http://schema.org/",
                    <br>&nbsp;&nbsp;&nbsp; "@type": "Event",
                    <br>&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{eventname}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "description": "<span class="element">{{eventdescription}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "image": "<span class="element">{{eventimage}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "url": "<span class="element">{{eventurl}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "startDate": "<span class="element">{{eventyearstart}}-{{eventmonthstart}}-{{eventdaystart}}T{{eventhourstart}}:{{eventminutestart}}</span>",
                    <span style="display:none" class="enddate"><br>&nbsp;&nbsp;&nbsp;  "endDate": "<span class="element">{{eventyearend}}-{{eventmonthend}}-{{eventdayend}}</span>",</span>
                    <br>&nbsp;&nbsp;&nbsp; "location": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "Place",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{eventnamelocation}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "address": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "PostalAddress",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "streetAddress": "<span class="element">{{eventstreetaddress}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "addressLocality": "<span class="element">{{eventaddresslocality}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "addressRegion": "<span class="element">{{eventaddressregion}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; "postalCode": "<span class="element">{{eventpostalcode}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "addressCountry": "<span class="element">{{eventaddresscountry}}</span>"
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;&nbsp;&nbsp; }<span style="display:none" class="performer">,
              <br>&nbsp;&nbsp;&nbsp;  "performer": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "<span style="display:none" class="person"><span class="element">Person</span></span><span style="display:none" class="performinggroup"><span class="element">PerformingGroup</span></span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{eventnameperformer}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; }</span><span style="display:none" class="offers">,
              <br>&nbsp;&nbsp;&nbsp;  "offers": {
              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    "@type": "Offer",
              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    "priceCurrency": "USD",
              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    "url": "{{eventurloffer}}",

                <!--Availability-->
                <span style="display:none" class="Discontinued"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/Discontinued</span>",</span>
                    <span style="display:none" class="InStock"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/InStock</span>",</span>
                    <span style="display:none" class="InStoreOnly"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/InStoreOnly</span>",</span>
                    <span style="display:none" class="LimitedAvailability"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/LimitedAvailability</span>",</span>
                    <span style="display:none" class="OnlineOnly"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/OnlineOnly</span>",</span>
                    <span style="display:none" class="OutOfStock"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/OutOfStock</span>",</span>
                    <span style="display:none" class="PreOrder"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/PreOrder</span>",</span>
                    <span style="display:none" class="PreSale"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/PreSale</span>",</span>
                    <span style="display:none" class="SoldOut"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "availability": "<span class="element">http://schema.org/SoldOut</span>",</span>

                    <!--Price Valid Until -->
                    <span style="display:none" class="sale"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "validFrom": "<span class="element">{{eventyearvalid}}-{{eventmonthvalid}}-{{eventdatevalid}}</span>",</span>

                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "price": "<span class="element">{{eventprice}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; }</span>
                    <br>&nbsp;}
                    <br>&nbsp; &lt;/script&gt;

                    <hr>
                    <!--Microdata -->
                    <h4>Microdata:</h4>
                    <h5><b>Note:</b> This microdata is only a sample for demonstrative purposes. Microdata should be wrapped around elements within your HTML page.</h5>
                    <p>
                        <br>&nbsp; &lt;div itemscope itemtype="http://schema.org/Event"&gt;
                        <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="name"&gt;<span class="element">{{eventname}}</span>&lt;span&gt;
                        <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="description"&gt;<span class="element">{{eventdescription}}</span>&lt;span&gt;
                        <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="image"&gt;<span class="element">{{eventimage}}</span>&lt;span&gt;
                        <br>&nbsp;&nbsp;&nbsp; &lt;meta itemprop="url" content="<span class="element">{{eventurl}}</span>" /&gt;
                        <br>&nbsp;&nbsp;&nbsp; &lt;meta itemprop="startDate" content="<span class="element">{{eventyearstart}}-{{eventmonthstart}}-{{eventdaystart}}T{{eventhourstart}}:{{eventminutestart}}</span>" /&gt;
                        <span style="display:none" class="enddate"><br>&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="endDate" content="<span class="element">{{eventyearend}}-{{eventmonthend}}-{{eventdayend}}</span>" /&gt;</span>

                        <!--location-->
                        <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="location" itemscope itemtype="http://schema.org/Place" &gt;
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="name"&gt;<span class="element">{{eventnamelocation}}</span>&lt;/span&gt;
                        <!--address-->
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" &gt;
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="streetAddress"&gt;<span class="element">{{eventstreetaddress}}</span>&lt;/span&gt;
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="addressLocality"&gt;<span class="element">{{eventaddresslocality}}</span>&lt;/span&gt;
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="addressRegion"&gt;<span class="element">{{eventaddressregion}}</span>&lt;/span&gt;
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="postalCode"&gt;<span class="element">{{eventpostalcode}}</span>&lt;/span&gt;
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="addressCountry"&gt;<span class="element">{{eventaddresscountry}}</span>&lt;/span&gt;
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                        <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;

                        <!--performer-->
                        <span style="display:none" class="performer">
               <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="performer" itemscope itemtype="http://schema.org/<span style="display:none" class="person"><span class="element">Person</span><span style="display:none" class="performinggroup">PerformingGroup</span></span>" &gt;
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="name"&gt;<span class="element">{{eventnameperformer}}</span>&lt;/span&gt;
                        <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                        </span>

                        <!--offers-->
                        <span style="display:none" class="offers">
               <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="offers" itemscope itemtype="http://schema.org/Offer" &gt;
                     <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &lt;meta itemprop="priceCurrency" content="<span class="element">USD</span>" /&gt;
                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="url" content="{{eventurloffer}}" /&gt;

                        <!-- Avalability-->
                        <span style="display:none" class="Discontinued"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/Discontinued</span>" /&gt;</span>
                        <span style="display:none" class="InStock"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/InStock</span>" /&gt;</span>
                        <span style="display:none" class="InStoreOnly"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/InStoreOnly</span>" /&gt;</span>
                        <span style="display:none" class="LimitedAvailability"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/LimitedAvailability</span>" /&gt;</span>
                        <span style="display:none" class="OnlineOnly"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/OnlineOnly</span>" /&gt;</span>
                        <span style="display:none" class="OutOfStock"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/OutOfStock</span>" /&gt;</span>
                        <span style="display:none" class="PreOrder"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/PreOrder</span>" /&gt;</span>
                        <span style="display:none" class="PreSale"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/PreSale</span>" /&gt;</span>
                        <span style="display:none" class="SoldOut"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="availability" content="<span class="element">http://schema.org/SoldOut</span>" /&gt;</span>

                        <!--Price Valid Until -->
                        <span style="display:none" class="sale">
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="validFrom" content="<span class="element">{{eventyearvalid}}-{{eventmonthvalid}}-{{eventdatevalid}}</span>" /&gt;
                        </span>

                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; $&lt;span itemprop="price"&gt;<span class="element">{{eventprice}}</span>&lt;/span&gt;
                        </span>
                        <br>&nbsp; &lt;/div&gt;
                    </p>

                    <hr>
                    <h4>More on BreadcrumbList Schema:</h4>
                    <p>
                        <ul>
                            <li><a href="https://developers.google.com/search/docs/data-types/events">Google's Event Structured Data Documentation</a></li>
                            <li><a href="http://schema.org/Event">Schema.org's Event Documentation</a></li>
                        </ul>
                    </p>

            </div>
            <div class="tab-pane" id="itemlist-schema">
                <h2>ItemList Schema (Carousel)</h2>
                <h4>Fill in the textbox below. The JSON-LD and Microdata below will update. Then copy the text and paste the following code into <a href="https://search.google.com/structured-data/testing-tool/u/0/">Google's Stuctured Data Testing Tool</a>!</h4>
                <!--Required markup input text boxes-->
                <div class="center-block">

                    <!--What type of elements are within this list -->
                    <br>
                    <select id="listitemtype" class="center-block" style="width:70%">
                        <option value="Select Option">Select Option Below:</option>
                        <option value="thing">Generic List of Things</option>
                        <option value="product">List of Products</option>
                        <option value="article">List of Articles</option>
                        <option value="event">List of Events</option>
                        <option value="place">List of Places</option>
                        <option value="musicrecording">List of Songs</option>
                        <option value="musicgroup">List of Music Artists</option>
                        <option value="recipe">List of Recipes</option>

                    </select>

                    <!--urls/names-->
                    <input class="center-block" type="text" ng-model="itemlistname" placeholder="Name of List">

                    <input class="center-block" type="text" ng-model="itemlistname1" placeholder="#1st/Highest Item in List">
                    <input class="center-block" type="text" ng-model="itemlistid1" placeholder="#1st Item's URL">

                    <input class="center-block" type="text" ng-model="itemlistname2" placeholder="#2nd Item in List">
                    <input class="center-block" type="text" ng-model="itemlistid2" placeholder="#2nd Item's URL">

                    <input class="center-block" type="text" ng-model="itemlistname3" placeholder="#3rd Item in List">
                    <input class="center-block" type="text" ng-model="itemlistid3" placeholder="#3rd Item's URL">

                    <span style="display:none" class="listitem4">
              <input class="center-block" type="text" ng-model="itemlistname4" placeholder="#4th Item in List">
                  <input class="center-block" type="text" ng-model="itemlistid4" placeholder="#4th Item's URL">
          </span>

                    <span style="display:none" class="listitem5">
              <input class="center-block" type="text" ng-model="itemlistname5" placeholder="#5th Item in List">
                  <input class="center-block" type="text" ng-model="itemlistid5" placeholder="#5th Item's URL">
          </span>

                    <!--item list order-->
                    <span style="display:none" class="itemlistorder">
                 <br>
                      <select id="itemlistorder2" class="center-block" style="width:70%">
                        <option value="Select Option">Select Option Below:</option>
                        <option value="itemlistorderdescending">Item List Order Descending</option>
                        <option value="itemlistorderascending">Item List Order Ascending</option>
                        <option value="itemlistorderunordered">Item List Order Unordered</option>
                      </select>
          </span>

                    <!--# of items-->
                    <span style="display:none" class="numberofitems">
              <input class="center-block" type="text" ng-model="itemlistnumberofitems" placeholder="Number of Items">
          </span>

                </div>

                <!--buttons-->
                <br>
                <div class="row" style="text-align:center">
                    <button type="button" id="listitem4" class="btn btn-primary btn-lg">+New Item List Element</button>
                    <button type="button" id="listitem5" class="btn btn-primary btn-lg">+New Item List Element</button>
                    <button type="button" id="itemlistorder" class="btn btn-primary btn-lg">+Item List Order</button>
                    <button type="button" id="numberofitems" class="btn btn-primary btn-lg">+Number of Items</button>
                </div>
                <!-- new list item -->

                <hr>
                <!--JSON-LD-->
                <h4>JSON-LD</h4>
                <p>
                    <br>&nbsp; &lt;script type="application/ld+json"&gt;
                    <br>&nbsp; {
                    <br>&nbsp;&nbsp;&nbsp; "@context": "http://schema.org/",
                    <br>&nbsp;&nbsp;&nbsp; "@type": "ItemList",
                    <br>&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{itemlistname}}</span>",

                    <!--# of items -->
                    <span style="display:none" class="numberofitems"><br>&nbsp;&nbsp;&nbsp; "numberOfItems": "<span class="element">{{itemlistnumberofitems}}</span>",</span>

                    <!--List Order -->
                    <span style="display:none" class="itemlistorderdescending"><br>&nbsp;&nbsp;&nbsp; "itemListOrder": "<span class="element">http://schema.org/ItemListOrderDescending</span>",</span>
                    <span style="display:none" class="itemlistorderascending"><br>&nbsp;&nbsp;&nbsp; "itemListOrder": "<span class="element">http://schema.org/ItemListOrderAscending</span>",</span>
                    <span style="display:none" class="itemlistorderunordered"><br>&nbsp;&nbsp;&nbsp; "itemListOrder": "<span class="element">http://schema.org/ItemListOrderUnordered</span>",</span>

                    <!--List-->
                    <br>&nbsp;&nbsp;&nbsp; "itemListElement": [{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "ListItem",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "position": "1",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "item": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "<span class="element"><span style="display:none" class="thing">Thing</span><span style="display:none" class="product">Product</span><span style="display:none" class="article">Article</span><span style="display:none" class="event">Event</span><span style="display:none" class="place">Place</span><span style="display:none" class="musicrecording">MusicRecording</span><span style="display:none" class="musicgroup">MusicGroup</span><span style="display:none" class="recipe">Recipe</span><span style="display:none" class="musicgroup">MusicGroup</span></span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "url": "<span class="element">{{itemlistid1}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{itemlistname1}}</span>"
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;&nbsp;&nbsp; },{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "ListItem",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "position": "2",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "item": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "<span class="element"><span style="display:none" class="thing">Thing</span><span style="display:none" class="product">Product</span><span style="display:none" class="article">Article</span><span style="display:none" class="event">Event</span><span style="display:none" class="place">Place</span><span style="display:none" class="musicrecording">MusicRecording</span><span style="display:none" class="musicgroup">MusicGroup</span><span style="display:none" class="recipe">Recipe</span><span style="display:none" class="musicgroup">MusicGroup</span></span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "url": "<span class="element">{{itemlistid2}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{itemlistname2}}</span>"
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;&nbsp;&nbsp; },{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "ListItem",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "position": "3",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "item": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "<span class="element"><span style="display:none" class="thing">Thing</span><span style="display:none" class="product">Product</span><span style="display:none" class="article">Article</span><span style="display:none" class="event">Event</span><span style="display:none" class="place">Place</span><span style="display:none" class="musicrecording">MusicRecording</span><span style="display:none" class="musicgroup">MusicGroup</span><span style="display:none" class="recipe">Recipe</span><span style="display:none" class="musicgroup">MusicGroup</span><span style="display:none" class="recipe">Recipe</span><span style="display:none" class="musicgroup">MusicGroup</span></span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "url": "<span class="element">{{itemlistid3}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{itemlistname3}}</span>"
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;&nbsp;&nbsp; }<span style="display:none" class="listitem4">,{
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "ListItem",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   "position": "4",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    "item": {
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "<span class="element"><span style="display:none" class="thing">Thing</span><span style="display:none" class="product">Product</span><span style="display:none" class="article">Article</span><span style="display:none" class="event">Event</span><span style="display:none" class="place">Place</span><span style="display:none" class="musicrecording">MusicRecording</span><span style="display:none" class="musicgroup">MusicGroup</span><span style="display:none" class="recipe">Recipe</span><span style="display:none" class="musicgroup">MusicGroup</span></span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "url": "<span class="element">{{itemlistid4}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{itemlistname4}}</span>"
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;&nbsp;&nbsp; }</span><span style="display:none" class="listitem5">,{
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "ListItem",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   "position": "5",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    "item": {
               <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "<span class="element"><span style="display:none" class="thing">Thing</span><span style="display:none" class="product">Product</span><span style="display:none" class="article">Article</span><span style="display:none" class="event">Event</span><span style="display:none" class="place">Place</span><span style="display:none" class="musicrecording">MusicRecording</span><span style="display:none" class="musicgroup">MusicGroup</span><span style="display:none" class="recipe">Recipe</span><span style="display:none" class="musicgroup">MusicGroup</span></span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "url": "<span class="element">{{itemlistid5}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{itemlistname5}}</span>"
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;&nbsp;&nbsp; }</span>
                    <br>&nbsp;&nbsp;&nbsp; ]
                    <br>&nbsp;}
                    <br>&nbsp; &lt;/script&gt;
                </p>

                <hr>
                <h4>More on ItemList Schema:</h4>
                <p>
                    <ul>
                        <li><a href="https://developers.google.com/search/docs/guides/mark-up-listings">Google's List/Carousel Structured Data Documentation</a></li>
                        <li><a href="https://developers.google.com/gmail/markup/reference/types/ItemList">Google's ItemList Structured Data Documentation</a></li>
                        <li><a href="http://schema.org/ItemList">Schema.org's ItemList Documentation</a></li>
                    </ul>
                </p>
            </div>
            <div class="tab-pane" id="local-business-schema">
                <h2>LocalBusiness Schema</h2>
                <h4>Fill in the textbox below. The JSON-LD and Microdata below will update. Then copy the text and paste the following code into <a href="https://search.google.com/structured-data/testing-tool/u/0/">Google's Stuctured Data Testing Tool</a>!</h4>
                <h4>Replace "LocalBusiness" in the markup with any more specific item types (ex. Restaurant, HealthClub, Dentist, FinancialService, etc.). You can find more specific item types nested under LocalBusiness in <a href="http://schema.org/docs/full.html">Schema.org's Full Schema Heirarchy</a></h4>
                <!--Required markup input text boxes-->
                <div class="center-block">
                    <input class="center-block" type="text" ng-model="localbusinessname" placeholder="Local business' name">
                    <input class="center-block" type="text" ng-model="localbusinessdescription" placeholder="Description of the local business">
                    <input class="center-block" type="text" ng-model="localbusinesstelephone" placeholder="Phone #">
                    <input class="center-block" type="text" ng-model="localbusinessimage" placeholder="Business' Image in a URL format (include http://)">
                    <input class="center-block" type="text" ng-model="localbusinesspricerange" placeholder="Price Range (ex. $, $$, $$$, etc.)">

                    <!--address -->
                    <input class="center-block" type="text" ng-model="localbusinessstreetaddress" placeholder="Street Address">
                    <input class="center-block" type="text" ng-model="localbusinessaddresslocality" placeholder="City">
                    <input class="center-block" type="text" ng-model="localbusinessaddressregion" placeholder="State (abbreviation)">
                    <input class="center-block" type="text" ng-model="localbusinesspostalcode" placeholder="Zip Code">
                    <input class="center-block" type="text" ng-model="localbusinessaddresscountry" placeholder="Country">

                    <!-- has Map -->
                    <div class="hasmap" style="display:none">
                        <input class="center-block" type="text" ng-model="localbusinesshasmap" placeholder="Map URL (include http://)">
                    </div>

                    <!--geo-->
                    <div class="geo" style="display:none">
                        <input class="center-block" type="text" ng-model="localbusinesslatitude" placeholder="latitude">
                        <input class="center-block" type="text" ng-model="localbusinesslongitude" placeholder="longitude">
                    </div>

                    <!--Aggregate Rating Options - Hidden-->
                    <div class="LBaggregate-rating" style="display:none">
                        <input class="center-block" type="text" ng-model="localbusinessratingvalue" placeholder="Average of all Ratings">
                        <input class="center-block" type="text" ng-model="localbusinessratingcount" placeholder="# of Reviews">
                        <input class="center-block" type="text" ng-model="localbusinessbestrating" placeholder="Top potential rating score">
                    </div>

                    <!--opening hours -->
                    <div class="weekday" style="display:none">
                        <input class="center-block" type="text" ng-model="localbusinessopensweekday" placeholder="Opening Hour Weekdays (military time)">
                        <input class="center-block" type="text" ng-model="localbusinessclosesweekday" placeholder="Closing Hour Weekdays (military time)">
                    </div>
                    <div class="weekend" style="display:none">
                        <input class="center-block" type="text" ng-model="localbusinessopensweekend" placeholder="Opening Hour Weekends (military time)">
                        <input class="center-block" type="text" ng-model="localbusinessclosesweekend" placeholder="Closing Hour Weekends (military time)">
                    </div>
                    <div class="monday" style="display:none">
                        <input class="center-block" type="text" ng-model="localbusinessopensmonday" placeholder="Opening Hour Monday (military time)">
                        <input class="center-block" type="text" ng-model="localbusinessclosesmonday" placeholder="Closing Hour Monday (military time)">
                    </div>
                    <div class="tuesday" style="display:none">
                        <input class="center-block" type="text" ng-model="localbusinessopenstuesday" placeholder="Opening Hour Tuesday (military time)">
                        <input class="center-block" type="text" ng-model="localbusinessclosestuesday" placeholder="Closing Hour Tuesday (military time)">
                    </div>
                    <div class="wednesday" style="display:none">
                        <input class="center-block" type="text" ng-model="localbusinessopenswednesday" placeholder="Opening Hour Wednesday (military time)">
                        <input class="center-block" type="text" ng-model="localbusinesscloseswednesday" placeholder="Closing Hour Wednesday (military time)">
                    </div>
                    <div class="thursday" style="display:none">
                        <input class="center-block" type="text" ng-model="localbusinessopensthursday" placeholder="Opening Hour Thursday (military time)">
                        <input class="center-block" type="text" ng-model="localbusinessclosesthursday" placeholder="Closing Hour Thursday (military time)">
                    </div>
                    <div class="friday" style="display:none">
                        <input class="center-block" type="text" ng-model="localbusinessopensfriday" placeholder="Opening Hour Friday (military time)">
                        <input class="center-block" type="text" ng-model="localbusinessclosesfriday" placeholder="Closing Hour Friday (military time)">
                    </div>
                    <div class="saturday" style="display:none">
                        <input class="center-block" type="text" ng-model="localbusinessopenssaturday" placeholder="Opening Hour Saturday (military time)">
                        <input class="center-block" type="text" ng-model="localbusinessclosessaturday" placeholder="Closing Hour Saturday (military time)">
                    </div>
                    <div class="sunday" style="display:none">
                        <input class="center-block" type="text" ng-model="localbusinessopenssunday" placeholder="Opening Hour Sunday (military time)">
                        <input class="center-block" type="text" ng-model="localbusinessclosessunday" placeholder="Closing Hour Sunday (military time)">
                    </div>
                </div>

                <!--buttons for additional itemprops-->
                <br>
                <div class="row" style="text-align:center">
                    <div class="col-md-3">
                        <button type="button" id="LBaggregate-rating" class="btn btn-primary btn-lg">+Aggregate Ratings</button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" id="hasmap" class="btn btn-primary btn-lg">+Has Map</button>

                    </div>
                    <div class="col-md-3">
                        <button type="button" id="geo" class="btn btn-primary btn-lg">+Geo Coordinates</button>
                    </div>
                    <div class="col-md-3">
                        <button type="button" id="opening-hours" class="btn btn-primary btn-lg">+Opening Hours</button>
                    </div>
                </div>
                <br>
                <div class="opening-hours-week" style="display:none">
                    <div style="text-align:center">
                        <button type="button" id="weekday" class="btn btn-success btn-sm">+Weekday Hours</button>
                        <button type="button" id="weekend" class="btn btn-success btn-sm">+Weekend Hours</button>
                        <button type="button" id="monday" class="btn btn-default btn-sm">+Monday Hours</button>
                        <button type="button" id="tuesday" class="btn btn-default btn-sm">+Tuesday Hours</button>
                        <button type="button" id="wednesday" class="btn btn-default btn-sm">+Wednesday Hours</button>
                        <button type="button" id="thursday" class="btn btn-default btn-sm">+Thursday Hours</button>
                        <button type="button" id="friday" class="btn btn-default btn-sm">+Friday Hours</button>
                        <button type="button" id="saturday" class="btn btn-default btn-sm">+Saturday Hours</button>
                        <button type="button" id="sunday" class="btn btn-default btn-sm">+Sunday Hours</button>
                    </div>
                </div>
                <hr>

                <!--JSON-LD-->
                <h4>JSON-LD</h4>
                <h5>Note: If you are closed on Sunday or weekends, you will have to remove a comma after the last OpeningHoursSpecification's object.</h5>
                <p>
                    <br>&nbsp; &lt;script type="application/ld+json"&gt;
                    <br>&nbsp; {
                    <br>&nbsp;&nbsp;&nbsp; "@context": "http://schema.org/",
                    <br>&nbsp;&nbsp;&nbsp; "@type": "LocalBusiness",
                    <br>&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{localbusinessname}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "description": "<span class="element">{{localbusinessdescription}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "telephone": "<span class="element">{{localbusinesstelephone}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "image": "<span class="element">{{localbusinessimage}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "priceRange": "<span class="element">{{localbusinesspricerange}}</span>",

                    <!-- Aggregate Rating -->
                    <span style="display:none" class="LBaggregate-rating">
                  <br>&nbsp;&nbsp;&nbsp; "aggregateRating": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "AggregateRating",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   "ratingValue": "<span class="element">{{localbusinessratingvalue}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "reviewCount": "<span class="element">{{localbusinessratingcount}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "bestRating": "<span class="element">{{localbusinessbestrating}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },
                    </span>

                    <!--has Map-->
                    <span style="display:none" class="hasmap">
                    <br>&nbsp;&nbsp;&nbsp;  "hasMap": "<span class="element">{{localbusinesshasmap}}</span>",
                    </span>

                    <!--geo -->
                    <span style="display:none" class="geo">
                  <br>&nbsp;&nbsp;&nbsp;  "geo": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "GeoCoordinates",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   "latitude": "<span class="element">{{localbusinesslatitude}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "longitude": "<span class="element">{{localbusinesslongitude}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },
                    </span>
                    <!--Opening Hours -->
                    <span style="display:none" class="opening-hours">
                  <br>&nbsp;&nbsp;&nbsp;  "openingHoursSpecification": [</span><span style="display:none" class="weekday">{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "OpeningHoursSpecification",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "opens": "<span class="element">{{localbusinessopensweekday}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "closes": "<span class="element">{{localbusinessclosesweekday}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },</span><span style="display:none" class="monday">{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "OpeningHoursSpecification",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "dayOfWeek": "Monday",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "opens": "<span class="element">{{localbusinessopensmonday}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "closes": "<span class="element">{{localbusinessclosesmonday}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },</span>
                    <span style="display:none" class="tuesday">{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "OpeningHoursSpecification",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "dayOfWeek": "Tuesday",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "opens": "<span class="element">{{localbusinessopenstuesday}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "closes": "<span class="element">{{localbusinessclosestuesday}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },</span>
                    <span style="display:none" class="wednesday">{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "OpeningHoursSpecification",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "dayOfWeek": "Wednesday",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "opens": "<span class="element">{{localbusinessopenswednesday}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "closes": "<span class="element">{{localbusinesscloseswednesday}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },</span>
                    <span style="display:none" class="thursday">{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "OpeningHoursSpecification",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "dayOfWeek": "Thursday",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "opens": "<span class="element">{{localbusinessopensthursday}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "closes": "<span class="element">{{localbusinessclosesthursday}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },</span><span style="display:none" class="friday">{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "OpeningHoursSpecification",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "dayOfWeek": "Friday",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "opens": "<span class="element">{{localbusinessopensfriday}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "closes": "<span class="element">{{localbusinessclosesfriday}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },</span><span style="display:none" class="saturday">{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "OpeningHoursSpecification",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "dayOfWeek": "Saturday",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "opens": "<span class="element">{{localbusinessopenssaturday}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "closes": "<span class="element">{{localbusinessclosessaturday}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },</span><span style="display:none" class="sunday">{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "OpeningHoursSpecification",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "dayOfWeek": "Sunday",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "opens": "<span class="element">{{localbusinessopenssunday}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "closes": "<span class="element">{{localbusinessclosessunday}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; }</span><span style="display:none" class="weekend">{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "OpeningHoursSpecification",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "dayOfWeek": ["Saturday","Sunday"],
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "opens": "<span class="element">{{localbusinessopensweekend}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "closes": "<span class="element">{{localbusinessclosesweekend}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; }</span><span style="display:none" class="opening-hours">],</span>

                    <br>&nbsp;&nbsp;&nbsp; "address": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "PostalAddress",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "streetAddress": "<span class="element">{{localbusinessstreetaddress}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "addressLocality": "<span class="element">{{localbusinessaddresslocality}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "addressRegion": "<span class="element">{{localbusinessaddressregion}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "postalCode": "<span class="element">{{localbusinesspostalcode}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "addressCountry": "<span class="element">{{localbusinessaddresscountry}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;}
                    <br>&nbsp; &lt;/script&gt;
                </p>
                <hr>
                <!--Microdata -->
                <h4>Microdata:</h4>
                <h5><b>Note:</b> This microdata is only a sample for demonstrative purposes. Microdata should be wrapped around elements within your HTML page.</h5>
                <p>
                    <br>&nbsp; &lt;div itemscope itemtype="http://schema.org/LocalBusiness"&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="name"&gt;<span class="element">{{localbusinessname}}</span>&lt;span&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="description"&gt;<span class="element">{{localbusinessdescription}}</span>&lt;span&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="telephone"&gt;<span class="element">{{localbusinesstelephone}}</span>&lt;span&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="image"&gt;<span class="element">{{localbusinessimage}}</span>&lt;span&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="priceRange"&gt;<span class="element">{{localbusinesspricerange}}</span>&lt;span&gt;

                    <!-- Aggregate Rating -->
                    <span style="display:none" class="LBaggregate-rating">
                    <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating" &gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;span itemprop="ratingValue"&gt;<span class="element">{{localbusinessratingvalue}}</span>&lt;/span&gt; stars, based on
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="reviewCount"&gt;<span class="element">{{localbusinessratingcount}}</span>&lt;/span&gt; reviews
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="bestRating" content="<span class="element">{{localbusinessbestrating}}"</span> /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    </span>

                    <!--has Map-->
                    <span style="display:none" class="hasmap">
                    <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="hasMap"&gt;<span class="element">{{localbusinesshasmap}}</span>&lt;span&gt;
                    </span>

                    <!--geo -->
                    <span style="display:none" class="geo">
                  <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="geo" itemscope itemtype="http://schema.org/GeoCoordinates" &gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &lt;meta itemprop="latitude" content="<span class="element">{{localbusinesslatitude}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="longitude" content="<span class="element">{{localbusinesslongitude}}</span>" /&gt;
                    <br>&lt;/span &gt;
                    </span>
                    <!--Opening Hours -->
                    <span style="display:none" class="opening-hours">
                <span style="display:none" class="weekday">
                    <br>&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="openingHours" content="Mo-Fr {{localbusinessopensweekday}}-{{localbusinessclosesweekday}}" /&gt;
                </span>
                    <span style="display:none" class="monday">{
                  <br>&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="openingHours" content="Mo {{localbusinessopensmonday}}-{{localbusinessclosesmonday}}" /&gt;
                </span>
                    <span style="display:none" class="tuesday">
                  <br>&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="openingHours" content="Tu {{localbusinessopenstuesday}}-{{localbusinessclosestuesday}}" /&gt;
                </span>
                    <span style="display:none" class="wednesday">
                  <br>&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="openingHours" content="Wed {{localbusinessopenswednesday}}-{{localbusinesscloseswednesday}}" /&gt;
                </span>
                    <span style="display:none" class="thursday">
                  <br>&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="openingHours" content="Th {{localbusinessopensthursday}}-{{localbusinessclosesthursday}}" /&gt;
                </span>
                    <span style="display:none" class="friday">
                  <br>&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="openingHours" content="Fr {{localbusinessopensfriday}}-{{localbusinessclosesfriday}}" /&gt;
                </span>
                    <span style="display:none" class="saturday">
                  <br>&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="openingHours" content="Sa {{localbusinessopenssaturday}}-{{localbusinessclosessaturday}}" /&gt;
                </span>
                    <span style="display:none" class="sunday">
                  <br>&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="openingHours" content="Su {{localbusinessopenssunday}}-{{localbusinessclosessunday}}" /&gt;
                </span>
                    <span style="display:none" class="weekend">
                  <br>&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="openingHours" content="Sa-Su {{localbusinessopensweekend}}-{{localbusinessclosesweekend}}" /&gt;
                </span>
                    </span>
                    <!--address-->
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" &gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="streetAddress"&gt;<span class="element">{{localbusinessstreetaddress}}</span>&lt;/span&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="addressLocality"&gt;<span class="element">{{localbusinessaddresslocality}}</span>&lt;/span&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="addressRegion"&gt;<span class="element">{{localbusinessaddressregion}}</span>&lt;/span&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="postalCode"&gt;<span class="element">{{localbusinesspostalcode}}</span>&lt;/span&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="addressCountry"&gt;<span class="element">{{localbusinessaddresscountry}}</span>&lt;/span&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    <br>&nbsp; &lt;/div&gt;
                </p>

                <hr>

                <h4>More on Local Business Schema:</h4>
                <p>
                    <ul>
                        <li><a href="https://developers.google.com/search/docs/data-types/local-businesses">Google's Local Business Structured Data Documentation</a></li>
                        <li><a href="http://schema.org/LocalBusiness">Schema.org's Local Business Documentation</a></li>
                    </ul>
                </p>
            </div>
            <div class="tab-pane" id="organization-schema">
                <h2>Organization Schema</h2>
                <h4>Fill in the textbox below. The JSON-LD and Microdata below will update. Then copy the text and paste the following code into <a href="https://search.google.com/structured-data/testing-tool/u/0/">Google's Stuctured Data Testing Tool</a>!</h4>
                <!--Required markup input text boxes-->
                <div class="center-block">
                    <input class="center-block" type="text" ng-model="organizationname" placeholder="Organization's name">
                    <input class="center-block" type="text" ng-model="organizationurl" placeholder="Organization's Homepage">
                    <input class="center-block" type="text" ng-model="organizationcustomerservice" placeholder="Organization's Customer Service Number (make sure to add +1 or country code)">

                    <!--address -->
                    <input class="center-block" type="text" ng-model="organizationstreetaddress" placeholder="Street Address">
                    <input class="center-block" type="text" ng-model="organizationaddresslocality" placeholder="State (spelled out)">
                    <input class="center-block" type="text" ng-model="organizationaddressregion" placeholder="State (abbreviation)">
                    <input class="center-block" type="text" ng-model="organizationpostalcode" placeholder="Zip Code">
                    <input class="center-block" type="text" ng-model="organizationaddresscountry" placeholder="Country">

                    <!--social media -->
                    <input class="center-block" type="text" ng-model="organizationfacebook" placeholder="Organization's Facebook">
                    <div class="twitter" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationtwitter" placeholder="Organization's Twitter">
                    </div>
                    <div class="instagram" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationinstagram" placeholder="Organization's Instagram">
                    </div>
                    <div class="youtube" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationyoutube" placeholder="Organization's YouTube">
                    </div>
                    <div class="linkedin" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationlinkedin" placeholder="Organization's LinkedIn">
                    </div>
                    <div class="google" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationgoogle" placeholder="Organization's Google+">
                    </div>
                    <div class="pinterest" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationpinterest" placeholder="Organization's Pinterest">
                    </div>
                    <div class="soundcloud" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationsoundcloud" placeholder="Organization's SoundCloud">
                    </div>
                    <div class="tumblr" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationtumblr" placeholder="Organization's Tumblr">
                    </div>
                    <div class="myspace" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationmyspace" placeholder="Organization's Myspace">
                    </div>

                    <!--customer service -->
                    <div class="technicalsupport" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationtechnicalsupport" placeholder="Technical Support # (make sure to add +1 or country code)">
                    </div>
                    <div class="billingsupport" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationbillingsupport" placeholder="Billing Support # (make sure to add +1 or country code)">
                    </div>
                    <div class="billpayment" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationbillpayment" placeholder="Bill Payment # (make sure to add +1 or country code)">
                    </div>
                    <div class="sales" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationsales" placeholder="Sales # (make sure to add +1 or country code)">
                    </div>
                    <div class="reservations" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationreservations" placeholder="Reservation # (make sure to add +1 or country code)">
                    </div>
                    <div class="creditcardsupport" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationcreditcardsupport" placeholder="Credit Card Support # (make sure to add +1 or country code)">
                    </div>
                    <div class="emergency" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationemergency" placeholder="Emergency # (make sure to add +1 or country code)">
                    </div>
                    <div class="baggagetracking" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationbaggagetracking" placeholder="Baggage Tracking # (make sure to add +1 or country code)">
                    </div>
                    <div class="roadsideassistance" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationroadsideassistance" placeholder="Roadside Assistance # (make sure to add +1 or country code)">
                    </div>
                    <div class="packagetracking" style="display:none">
                        <input class="center-block" type="text" ng-model="organizationpackagetracking" placeholder="Package Tracking # (make sure to add +1 or country code)">
                    </div>

                </div>
                <!--buttons -->
                <br>
                <!--social buttons -->
                <div class="row" style="text-align:center">
                    <button type="button" id="twitter" class="btn btn-info btn-md">+Twitter</button>
                    <button type="button" id="instagram" class="btn btn-info btn-md">+Instagram</button>
                    <button type="button" id="youtube" class="btn btn-info btn-md">+YouTube</button>
                    <button type="button" id="linkedin" class="btn btn-info btn-md">+LinkedIn</button>
                    <button type="button" id="google" class="btn btn-info btn-md">+Google+</button>
                    <button type="button" id="pinterest" class="btn btn-info btn-md">+Pinterest</button>
                    <button type="button" id="soundcloud" class="btn btn-info btn-md">+SoundCloud</button>
                    <button type="button" id="tumblr" class="btn btn-info btn-md">+Tumblr</button>
                    <button type="button" id="myspace" class="btn btn-info btn-md">+Myspace</button>
                </div>
                <br>
                <!-- # buttons -->
                <div class="row" style="text-align:center">
                    <button type="button" id="technicalsupport" class="btn btn-warning btn-sm">+Technical Support</button>
                    <button type="button" id="billingsupport" class="btn btn-warning btn-sm">+Billing Support</button>
                    <button type="button" id="billpayment" class="btn btn-warning btn-sm">+Bill Payment</button>
                    <button type="button" id="sales" class="btn btn-warning btn-sm">+Sales</button>
                    <button type="button" id="reservations" class="btn btn-warning btn-sm">+Reservations</button>
                    <button type="button" id="creditcardsupport" class="btn btn-warning btn-sm">+Credit Card Support</button>
                    <button type="button" id="emergency" class="btn btn-warning btn-sm">+Emergency</button>
                    <button type="button" id="baggagetracking" class="btn btn-warning btn-sm">+Baggage Tracking</button>
                    <button type="button" id="roadsideassistance" class="btn btn-warning btn-sm">+Roadside Assistance</button>
                    <button type="button" id="packagetracking" class="btn btn-warning btn-sm">+Package Tracking</button>
                </div>

                <hr>
                <!--JSON-LD-->
                <h4>JSON-LD</h4>
                <p>
                    <br>&nbsp; &lt;script type="application/ld+json"&gt;
                    <br>&nbsp; {
                    <br>&nbsp;&nbsp;&nbsp; "@context": "http://schema.org/",
                    <br>&nbsp;&nbsp;&nbsp; "@type": "Organization",
                    <br>&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{organizationname}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "url": "<span class="element">{{organizationurl}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "address": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "PostalAddress",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "streetAddress": "<span class="element">{{organizationstreetaddress}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "addressLocality": "<span class="element">{{organizationaddresslocality}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "addressRegion": "<span class="element">{{organizationaddressregion}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "postalCode": "<span class="element">{{organizationpostalcode}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "addressCountry": "<span class="element">{{organizationaddresscountry}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },
                    <!--social media-->
                    <br>&nbsp;&nbsp;&nbsp; "sameAs": [ "
                    <span class="element">{{organizationfacebook}}</span>"
                    <span style="display:none" class="twitter">, "<span class="element">{{organizationtwitter}}</span>"</span>
                    <span style="display:none" class="instagram">, "<span class="element">{{organizationinstagram}}</span>"</span>
                    <span style="display:none" class="youtube">, "<span class="element">{{organizationyoutube}}</span>"</span>
                    <span style="display:none" class="linkedin">, "<span class="element">{{organizationlinkedin}}</span>"</span>
                    <span style="display:none" class="google">, "<span class="element">{{organizationgoogle}}</span>"</span>
                    <span style="display:none" class="pinterest">, "<span class="element">{{organizationpinterest}}</span>"</span>
                    <span style="display:none" class="soundcloud">, "<span class="element">{{organizationsoundcloud}}</span>"</span>
                    <span style="display:none" class="tumblr">, "<span class="element">{{organizationtumblr}}</span>"</span>
                    <span style="display:none" class="myspace">, "<span class="element">{{organizationmyspace}}</span>"</span>],

                    <!--phone #s-->
                    <br>&nbsp;&nbsp;&nbsp; "contactPoint": [{
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "ContactPoint",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "telephone": "<span class="element">{{organizationcustomerservice}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "contactType": "customer service"
                    <br>&nbsp;}<span style="display:none" class="technicalsupport">,
                <br>&nbsp;{
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "ContactPoint",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "telephone": "<span class="element">{{organizationtechnicalsupport}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "contactType": "technical support"
                    <br>&nbsp;&nbsp;}</span><span style="display:none" class="billingsupport">,
                <br>&nbsp;&nbsp;{
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "ContactPoint",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "telephone": "<span class="element">{{organizationbillingsupport}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "contactType": "billing support"
                    <br>&nbsp;&nbsp;}</span><span style="display:none" class="billpayment">,
                <br>&nbsp;&nbsp;{
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "ContactPoint",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "telephone": "<span class="element">{{organizationbillpayment}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "contactType": "bill payment"
                    <br>&nbsp;&nbsp;}</span><span style="display:none" class="sales">,
                <br>&nbsp;&nbsp;{
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "ContactPoint",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "telephone": "<span class="element">{{organizationsales}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "contactType": "sales"
                    <br>&nbsp;&nbsp;}</span><span style="display:none" class="reservations">,
                <br>&nbsp;&nbsp;{
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "ContactPoint",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "telephone": "<span class="element">{{organizationreservations}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "contactType": "reservations"
                    <br>&nbsp;&nbsp;}</span><span style="display:none" class="creditcardsupport">,
                <br>&nbsp;&nbsp;{
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "ContactPoint",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "telephone": "<span class="element">{{organizationcreditcardsupport}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "contactType": "credit card support"
                    <br>&nbsp;&nbsp;}</span><span style="display:none" class="emergency">,
                <br>&nbsp;&nbsp;{
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "ContactPoint",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "telephone": "<span class="element">{{organizationemergency}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "contactType": "emergency"
                    <br>&nbsp;&nbsp;}</span><span style="display:none" class="baggagetracking">,
                <br>&nbsp;&nbsp;{
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "ContactPoint",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "telephone": "<span class="element">{{organizationbaggagetracking}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "contactType": "baggage tracking"
                    <br>&nbsp;&nbsp;}</span><span style="display:none" class="roadsideassistance">,
                <br>&nbsp;&nbsp;{
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "ContactPoint",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "telephone": "<span class="element">{{organizationroadsideassistance}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "contactType": "roadside assistance"
                    <br>&nbsp;&nbsp;}</span><span style="display:none" class="packagetracking">,
                <br>&nbsp;&nbsp;{
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "ContactPoint",
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "telephone": "<span class="element">{{organizationpackagetracking}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "contactType": "package tracking"
                    <br>&nbsp;&nbsp;}</span>]
                    <br>&nbsp;}
                    <br>&nbsp; &lt;/script&gt;
                </p>

                <hr>
                <h4>Microdata:</h4>
                <h5><b>Note:</b> This microdata is only a sample for demonstrative purposes. Microdata should be wrapped around elements within your HTML page.</h5>
                <p>
                    <br>&nbsp; &lt;div itemscope itemtype="http://schema.org/Organization"&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="name"&gt;<span class="element">{{organizationname}}</span>&lt;span&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="url"&gt;<span class="element">{{organizationurl}}</span>&lt;span&gt;
                    <!--address-->
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="address" itemscope itemtype="http://schema.org/PostalAddress" &gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="streetAddress"&gt;<span class="element">{{organizationstreetaddress}}</span>&lt;span&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="addressLocality"&gt;<span class="element">{{organizationaddresslocality}}</span>&lt;span&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="addressRegion"&gt;<span class="element">{{organizationaddressregion}}</span>&lt;span&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="postalCode"&gt;<span class="element">{{organizationpostalcode}}</span>&lt;span&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="addressCountry"&gt;<span class="element">{{organizationaddresscountry}}</span>&lt;span&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;

                    <!-- social media-->
                    <br>&nbsp;&nbsp;&nbsp; &lt;a itemprop="sameAs" href="{{organizationfacebook}}"&gt;FB&lt;/a&gt;

                    <span style="display:none" class="twitter">
                <br>&nbsp;&nbsp;&nbsp;  &lt;a itemprop="sameAs" href="<span class="element">{{organizationtwitter}}</span>"&gt;Twitter&lt;/a&gt;
                    </span>
                    <span style="display:none" class="instagram">
                <br>&nbsp;&nbsp;&nbsp;  &lt;a itemprop="sameAs" href="<span class="element">{{organizationinstagram}}</span>"&gt;Instagram&lt;/a&gt;
                    </span>
                    <span style="display:none" class="youtube">
                <br>&nbsp;&nbsp;&nbsp;  &lt;a itemprop="sameAs" href="<span class="element">{{organizationyoutube}}</span>"&gt;YouTube&lt;/a&gt;
                    </span>
                    <span style="display:none" class="linkedin">
                <br>&nbsp;&nbsp;&nbsp;  &lt;a itemprop="sameAs" href="<span class="element">{{organizationlinkedin}}</span>"&gt;LinkedIn&lt;/a&gt;
                    </span>
                    <span style="display:none" class="google">
                <br>&nbsp;&nbsp;&nbsp;  &lt;a itemprop="sameAs" href="<span class="element">{{organizationgoogle}}</span>"&gt;Google&lt;/a&gt;
                    </span>
                    <span style="display:none" class="pinterest">
                <br>&nbsp;&nbsp;&nbsp;  &lt;a itemprop="sameAs" href="<span class="element">{{organizationpinterest}}</span>"&gt;Pinterest&lt;/a&gt;
                    </span>
                    <span style="display:none" class="soundcloud">
                <br>&nbsp;&nbsp;&nbsp;  &lt;a itemprop="sameAs" href="<span class="element">{{organizationsoundcloud}}</span>"&gt;SoundCloud&lt;/a&gt;
                    </span>
                    <span style="display:none" class="tumblr">
                <br>&nbsp;&nbsp;&nbsp;  &lt;a itemprop="sameAs" href="<span class="element">{{organizationtumblr}}</span>"&gt;Tumblr&lt;/a&gt;
                    </span>
                    <span style="display:none" class="myspace">
                <br>&nbsp;&nbsp;&nbsp;  &lt;a itemprop="sameAs" href="<span class="element">{{organizationmyspace}}</span>"&gt;Myspace&lt;/a&gt;
                    </span>

                    <!--phone #s-->
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint" &gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="telephone" content="<span class="element">{{organizationcustomerservice}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="contactType" content="customer service" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    <span style="display:none" class="technicalsupport">
            <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint" &gt;
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="telephone" content="<span class="element">{{organizationtechnicalsupport}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="contactType" content="technical support" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    </span>
                    <span style="display:none" class="billingsupport">
            <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint" &gt;
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="telephone" content="<span class="element">{{organizationbillingsupport}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="contactType" content="billing support" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    </span>
                    <span style="display:none" class="billpayment">
            <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint" &gt;
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="telephone" content="<span class="element">{{organizationbillpayment}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="contactType" content="bill payment" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    </span>
                    <span style="display:none" class="sales">
            <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint" &gt;
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="telephone" content="<span class="element">{{organizationsales}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="contactType" content="sales" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    </span>
                    <span style="display:none" class="reservations">
            <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint" &gt;
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="telephone" content="<span class="element">{{organizationreservations}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="contactType" content="reservations" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    </span>
                    <span style="display:none" class="creditcardsupport">
            <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint" &gt;
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="telephone" content="<span class="element">{{organizationcreditcardsupport}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="contactType" content="credit card support" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    </span>
                    <span style="display:none" class="emergency">
            <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint" &gt;
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="telephone" content="<span class="element">{{organizationemergency}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="contactType" content="emergency" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    </span>
                    <span style="display:none" class="baggagetracking">
            <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint" &gt;
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="telephone" content="<span class="element">{{organizationbaggagetracking}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="contactType" content="baggage tracking" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    </span>
                    <span style="display:none" class="roadsideassistance">
            <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint" &gt;
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="telephone" content="<span class="element">{{organizationroadsideassistance}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="contactType" content="roadside assistancee" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    </span>
                    <span style="display:none" class="packagetracking">
            <br>&nbsp;&nbsp;&nbsp;   &lt;span itemprop="contactPoint" itemscope itemtype="http://schema.org/ContactPoint" &gt;
            <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   &lt;meta itemprop="telephone" content="<span class="element">{{organizationpackagetracking}}</span>" /&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;meta itemprop="contactType" content="package tracking" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;/span&gt;
                    </span>
                    <br>&nbsp; &lt;/div&gt;
                </p>

                <hr>

                <h4>More on Organization Schema:</h4>
                <p>
                    <ul>
                        <li><a href="https://developers.google.com/search/docs/data-types/corporate-contacts">Google's Corporate Contact Structured Data Documentation</a></li>
                        <li><a href="https://developers.google.com/search/docs/data-types/social-profile-links">Google's Social Profile Structured Data Documentation</a></li>
                        <li><a href="http://schema.org/Organization">Schema.org's Organization Documentation</a></li>
                    </ul>
                </p>
            </div>
            <div class="tab-pane" id="recipe-schema">
                <h2>Recipe Schema</h2>
                <h4>Fill in the textbox below. The JSON-LD and Microdata below will update. Then copy the text and paste the following code into <a href="https://search.google.com/structured-data/testing-tool/u/0/">Google's Stuctured Data Testing Tool</a>!</h4>
                <!--Required markup input text boxes-->
                <div class="center-block" <input class="center-block" type="text" ng-model="recipename" placeholder="Recipe Name">
                    <input class="center-block" type="text" ng-model="recipeimage" placeholder="Image of Recipe (include http://)">
                    <input class="center-block" type="text" ng-model="recipedescription" placeholder="Description of Recipe">

                    <!--recipe category -->
                    <br>
                    <h4 style="text-align:center">Recipe Category:</h4>
                    <select id="recipecategory" class="center-block" style="width:70%">
                        <option value="Select Option">Select Option Below:</option>
                        <option value="appetizer">appetizer</option>
                        <option value="entree">entree</option>
                        <option value="dessert">dessert</option>
                    </select>

                    <!--Aggregate Rating Options - Hidden-->
                    <div class="Raggregate-rating" style="display:none">
                        <input class="center-block" type="text" ng-model="reciperatingvalue" placeholder="Average of all Ratings">
                        <input class="center-block" type="text" ng-model="reciperatingcount" placeholder="# of Reviews">
                        <input class="center-block" type="text" ng-model="recipebestrating" placeholder="Top potential rating score">
                    </div>

                    <!--author- hidden-->
                    <div class="Rauthor" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeauthor" placeholder="Recipe Author">
                    </div>

                    <!--prep time - hidden-->
                    <div class="preptime" style="display:none">
                        <input class="center-block" type="text" ng-model="recipepreptime" placeholder="Prep Time (ex., PT30M)">
                    </div>

                    <!--cook time - hidden-->
                    <div class="cooktime" style="display:none">
                        <input class="center-block" type="text" ng-model="recipecooktime" placeholder="Cook Time (ex., PT3H)">
                    </div>

                    <!--total time - hidden-->
                    <div class="totaltime" style="display:none">
                        <input class="center-block" type="text" ng-model="recipetotaltime" placeholder="Total Time (ex., PT5H)">
                    </div>

                    <!--recipe yield - hidden-->
                    <div class="recipeyield" style="display:none">
                        <input class="center-block" type="text" ng-model="reciperecipeyield" placeholder="How many people does this serve? (ex., 8)">
                    </div>

                    <!--nutrition - hidden-->
                    <div class="calories" style="display:none">
                        <input class="center-block" type="text" ng-model="recipecalories" placeholder="Calories">
                    </div>
                    <div class="servingsize" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeservingsize" placeholder="Serving Size">
                    </div>
                    <div class="fatcontent" style="display:none">
                        <input class="center-block" type="text" ng-model="recipefatcontent" placeholder="Fat Content (in grams)">
                    </div>
                    <div class="carbohydratecontent" style="display:none">
                        <input class="center-block" type="text" ng-model="recipecarbohydratecontent" placeholder="Carbohydrate Content (in grams)">
                    </div>
                    <div class="fibercontent" style="display:none">
                        <input class="center-block" type="text" ng-model="recipefibercontent" placeholder="Fiber Content (in grams)">
                    </div>
                    <div class="proteincontent" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeproteincontent" placeholder="Protein Content (in grams)">
                    </div>
                    <div class="cholesterolcontent" style="display:none">
                        <input class="center-block" type="text" ng-model="recipecholesterolcontent" placeholder="Cholesterol Content (in grams)">
                    </div>
                    <div class="saturatedfatcontent" style="display:none">
                        <input class="center-block" type="text" ng-model="recipesaturatedfatcontent" placeholder="Saturated Fat Content (in grams)">
                    </div>
                    <div class="sodiumcontent" style="display:none">
                        <input class="center-block" type="text" ng-model="recipesodiumcontent" placeholder="Sodium Content (in milligrams)">
                    </div>
                    <div class="sugarcontent" style="display:none">
                        <input class="center-block" type="text" ng-model="recipesugarcontent" placeholder="Sugar Content (in grams)">
                    </div>
                    <div class="transfatcontent" style="display:none">
                        <input class="center-block" type="text" ng-model="recipetransfatcontent" placeholder="Trans Fat Content (in grams)">
                    </div>
                    <div class="unsaturatedfatcontent" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeunsaturatedfatcontent" placeholder="Unsaturated Fat Content (in grams)">
                    </div>

                    <!--dietary constraints category -->
                    <div class="suitablefordiet1" style="display:none;text-align:center">
                        <br>
                        <h4>Fits the Following Diets:</h4>
                        <select id="suitablefordiet" class="center-block" style="width:70%">
                            <option value="Select Option">Select Option Below:</option>
                            <option value="GlutenFreeDiet">Gluten Free Diet</option>
                            <option value="HalalDiet">Halal Diet</option>
                            <option value="HinduDiet">Hindu Diet</option>
                            <option value="KosherDiet">Kosher Diet</option>
                            <option value="LowCalorieDiet">Low Calorie Diet</option>
                            <option value="LowFatDiet">Low Fat Diet</option>
                            <option value="LowLactoseDiet">Low Lactose Diet</option>
                            <option value="LowSaltDiet">Low Salt Diet</option>
                            <option value="VeganDiet">Vegan Diet</option>
                            <option value="VegetarianDiet">Vegetarian Diet</option>
                        </select>
                    </div>
                    <!--recipe ingredients - hidden-->
                    <div class="ingredient1" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeingredient1" placeholder="Ingredient #1">
                    </div>
                    <div class="ingredient2" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeingredient2" placeholder="Ingredient #2">
                    </div>
                    <div class="ingredient3" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeingredient3" placeholder="Ingredient #3">
                    </div>
                    <div class="ingredient4" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeingredient4" placeholder="Ingredient #4">
                    </div>
                    <div class="ingredient5" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeingredient5" placeholder="Ingredient #5">
                    </div>
                    <div class="ingredient6" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeingredient6" placeholder="Ingredient #6">
                    </div>
                    <div class="ingredient7" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeingredient7" placeholder="Ingredient #7">
                    </div>
                    <div class="ingredient8" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeingredient8" placeholder="Ingredient #8">
                    </div>
                    <div class="ingredient9" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeingredient9" placeholder="Ingredient #9">
                    </div>
                    <div class="ingredient10" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeingredient10" placeholder="Ingredient #10">
                    </div>

                    <!--recipe instructions - hidden-->
                    <div class="instructions1" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeinstructions1" placeholder="Step #1">
                    </div>
                    <div class="instructions2" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeinstructions2" placeholder="Step #2">
                    </div>
                    <div class="instructions3" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeinstructions3" placeholder="Step #3">
                    </div>
                    <div class="instructions4" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeinstructions4" placeholder="Step #4">
                    </div>
                    <div class="instructions5" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeinstructions5" placeholder="Step #5">
                    </div>
                    <div class="instructions6" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeinstructions6" placeholder="Step #6">
                    </div>
                    <div class="instructions7" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeinstructions7" placeholder="Step #7">
                    </div>
                    <div class="instructions8" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeinstructions8" placeholder="Step #8">
                    </div>
                    <div class="instructions9" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeinstructions9" placeholder="Step #9">
                    </div>
                    <div class="instructions10" style="display:none">
                        <input class="center-block" type="text" ng-model="recipeinstructions10" placeholder="Step #10">
                    </div>

                </div>
                <!--buttons-->
                <br>
                <br>
                <!-- other buttons -->
                <div class="row" style="text-align:center">
                    <button type="button" id="Rauthor" class="btn btn-primary btn-lg">+Recipe Author</button>
                    <button type="button" id="recipeyield" class="btn btn-primary btn-lg">+Recipe Yield</button>

                    <!-- timing buttons -->
                    <button type="button" id="preptime" class="btn btn-danger btn-lg">+Prep Time</button>
                    <button type="button" id="cooktime" class="btn btn-danger btn-lg">+Cook Time</button>
                    <button type="button" id="totaltime" class="btn btn-danger btn-lg">+Total Time</button>
                    <button type="button" id="Raggregate-rating-button" class="btn btn-primary btn-lg">+Aggregate Rating</button>
                    <button type="button" id="nutrition" class="btn btn-success btn-lg">+Nutrition</button>

                </div>
                <!-- nutrition buttons -->
                <div style="display:none" class="nutrition">
                    <br>
                    <div class="row" style="text-align:center">
                        <button type="button" id="calories" class="btn btn-success btn-md">+Calories</button>
                        <button type="button" id="servingsize" class="btn btn-success btn-md">+Serving Size</button>
                        <button type="button" id="fatcontent" class="btn btn-success btn-md">+Fat Content</button>
                        <button type="button" id="carbohydratecontent" class="btn btn-success btn-md">+Carbohydrate Content</button>
                        <button type="button" id="fibercontent" class="btn btn-success btn-md">+Fiber Content</button>
                        <button type="button" id="proteincontent" class="btn btn-success btn-md">+Protein Content</button>
                        <button type="button" id="cholesterolcontent" class="btn btn-success btn-md">+Cholesterol Content</button>
                    </div>
                    <br>
                    <div class="row" style="text-align:center">
                        <button type="button" id="saturatedfatcontent" class="btn btn-success btn-md">+Saturated Fat Content</button>
                        <button type="button" id="sodiumcontent" class="btn btn-success btn-md">+Sodium Content</button>
                        <button type="button" id="sugarcontent" class="btn btn-success btn-md">+Sugar Content</button>
                        <button type="button" id="transfatcontent" class="btn btn-success btn-md">+Trans Fat Content</button>
                        <button type="button" id="unsaturatedfatcontent" class="btn btn-success btn-md">+Unsaturated Fat Content</button>

                        <!--dietary constraints category -->
                        <button type="button" id="suitablefordiet1" class="btn btn-success btn-md">+Suitable for Diet</button>
                    </div>
                </div>

                <br>
                <!--ingredient buttons -->
                <div class="row" style="text-align:center">
                    <button type="button" id="ingredient1" class="btn btn-info btn-sm">+Ingredient #1</button>
                    <button type="button" id="ingredient2" class="btn btn-info btn-sm">+Ingredient #2</button>
                    <button type="button" id="ingredient3" class="btn btn-info btn-sm">+Ingredient #3</button>
                    <button type="button" id="ingredient4" class="btn btn-info btn-sm">+Ingredient #4</button>
                    <button type="button" id="ingredient5" class="btn btn-info btn-sm">+Ingredient #5</button>
                    <button type="button" id="ingredient6" class="btn btn-info btn-sm">+Ingredient #6</button>
                    <button type="button" id="ingredient7" class="btn btn-info btn-sm">+Ingredient #7</button>
                    <button type="button" id="ingredient8" class="btn btn-info btn-sm">+Ingredient #8</button>
                    <button type="button" id="ingredient9" class="btn btn-info btn-sm">+Ingredient #9</button>
                    <button type="button" id="ingredient10" class="btn btn-info btn-sm">+Ingredient #10</button>
                </div>
                <br>
                <!-- instructions buttons -->
                <div class="row" style="text-align:center">
                    <button type="button" id="instructions1" class="btn btn-warning btn-sm">+Instructions #1</button>
                    <button type="button" id="instructions2" class="btn btn-warning btn-sm">+Instructions #2</button>
                    <button type="button" id="instructions3" class="btn btn-warning btn-sm">+Instructions #3</button>
                    <button type="button" id="instructions4" class="btn btn-warning btn-sm">+Instructions #4</button>
                    <button type="button" id="instructions5" class="btn btn-warning btn-sm">+Instructions #5</button>
                    <button type="button" id="instructions6" class="btn btn-warning btn-sm">+Instructions #6</button>
                    <button type="button" id="instructions7" class="btn btn-warning btn-sm">+Instructions #7</button>
                    <button type="button" id="instructions8" class="btn btn-warning btn-sm">+Instructions #8</button>
                    <button type="button" id="instructions9" class="btn btn-warning btn-sm">+Instructions #9</button>
                    <button type="button" id="instructions10" class="btn btn-warning btn-sm">+Instructions #10</button>
                </div>
                <br>

                <hr>
                <!--JSON-LD-->
                <h4>JSON-LD</h4>
                <p>
                    <br>&nbsp; &lt;script type="application/ld+json"&gt;
                    <br>&nbsp; {
                    <br>&nbsp;&nbsp;&nbsp; "@context": "http://schema.org/",
                    <br>&nbsp;&nbsp;&nbsp; "@type": "Recipe",
                    <br>&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{recipename}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "image": "<span class="element">{{recipeimage}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "description": "<span class="element">{{recipedescription}}</span>",

                    <!-- Aggregate Rating -->
                    <span style="display:none" class="Raggregate-rating">
                  <br>&nbsp;&nbsp;&nbsp; "aggregateRating": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "AggregateRating",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   "ratingValue": "<span class="element">{{reciperatingvalue}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "reviewCount": "<span class="element">{{reciperatingcount}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "bestRating": "<span class="element">{{recipebestrating}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; },
                    </span>

                    <!--author -->
                    <span style="display:none" class="Rauthor"><br>&nbsp;&nbsp;&nbsp; "author": "<span class="element">{{recipeauthor}}</span>",</span>

                    <!--recipe yield -->
                    <span style="display:none" class="recipeyield"><br>&nbsp;&nbsp;&nbsp; "recipeYield": <span class="element">{{reciperecipeyield}}</span>,</span>

                    <!--preptime -->
                    <span style="display:none" class="preptime"><br>&nbsp;&nbsp;&nbsp; "prepTime": "<span class="element">{{recipepreptime}}</span>",</span>

                    <!--cooktime -->
                    <span style="display:none" class="cooktime"><br>&nbsp;&nbsp;&nbsp; "cookTime": "<span class="element">{{recipecooktime}}</span>",</span>

                    <!--totaltime -->
                    <span style="display:none" class="totaltime"><br>&nbsp;&nbsp;&nbsp; "totalTime": "<span class="element">{{recipetotaltime}}</span>",</span>

                    <!--recipe ingredient -->
                    <span style="display:none" class="ingredient1">
              <br>&nbsp;&nbsp;&nbsp; "recipeIngredient": [
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">{{recipeingredient1}}</span>"<span style="display:none" class="ingredient2">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">{{recipeingredient2}}</span>"</span><span style="display:none" class="ingredient3">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">{{recipeingredient3}}</span>"</span><span style="display:none" class="ingredient4">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">{{recipeingredient4}}</span>"</span><span style="display:none" class="ingredient5">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">{{recipeingredient5}}</span>"</span><span style="display:none" class="ingredient6">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">{{recipeingredient6}}</span>"</span><span style="display:none" class="ingredient7">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">{{recipeingredient7}}</span>"</span><span style="display:none" class="ingredient8">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">{{recipeingredient8}}</span>"</span><span style="display:none" class="ingredient9">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">{{recipeingredient9}}</span>"</span><span style="display:none" class="ingredient10">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">{{recipeingredient10}}</span>"</span>
                    <br>&nbsp;&nbsp;&nbsp; ],
                    </span>

                    <!--recipe instructions -->
                    <span style="display:none" class="instructions1">
              <br>&nbsp;&nbsp;&nbsp; "recipeInstructions": [
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">1. {{recipeinstructions1}}</span>"<span style="display:none" class="instructions2">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">2. {{recipeinstructions2}}</span>"</span><span style="display:none" class="instructions3">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">3. {{recipeinstructions3}}</span>"</span><span style="display:none" class="instructions4">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">4. {{recipeinstructions4}}</span>"</span><span style="display:none" class="instructions5">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">5. {{recipeinstructions5}}</span>"</span><span style="display:none" class="instructions6">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">6. {{recipeinstructions6}}</span>"</span><span style="display:none" class="instructions7">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">7. {{recipeinstructions7}}</span>"</span><span style="display:none" class="instructions8">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">8. {{recipeinstructions8}}</span>"</span><span style="display:none" class="instructions9">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">9. {{recipeinstructions9}}</span>"</span><span style="display:none" class="instructions10">,
                <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"<span class="element">10. {{recipeinstructions10}}</span>"</span>
                    <br>&nbsp;&nbsp;&nbsp; ],
                    </span>

                    <!--nutrition - hidden-->
                    <span style="display:none" class="nutrition">
              <br>&nbsp;&nbsp;&nbsp; "nutrition": {
              <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "NutritionInformation",

                  <span style="display:none" class="calories"><br>&nbsp;&nbsp;&nbsp;&nbsp; "calories": "<span class="element">{{recipecalories}}</span>"</span><span style="display:none" class="fatcontent">,
                    <br>&nbsp;&nbsp;&nbsp;&nbsp; "fatContent": "<span class="element">{{recipefatcontent}}</span>"</span><span style="display:none" class="carbohydratecontent">,
                    <br>&nbsp;&nbsp;&nbsp;&nbsp; "carbohydrateContent": "<span class="element">{{recipecarbohydratecontent}}</span>"</span><span style="display:none" class="fibercontent">,
                    <br>&nbsp;&nbsp;&nbsp;&nbsp; "fiberContent": "<span class="element">{{recipefibercontent}}</span>"</span><span style="display:none" class="proteincontent">,
                    <br>&nbsp;&nbsp;&nbsp;&nbsp; "proteinContent": "<span class="element">{{recipeproteincontent}}</span>"</span><span style="display:none" class="saturatedfatcontent">,
                    <br>&nbsp;&nbsp;&nbsp;&nbsp; "saturatedFatContent": "<span class="element">{{recipesaturatedfatcontent}}</span>"</span><span style="display:none" class="servingsize">,
                    <br>&nbsp;&nbsp;&nbsp;&nbsp; "servingSize": "<span class="element">{{recipeservingsize}}</span>"</span><span style="display:none" class="sodiumcontent">,
                    <br>&nbsp;&nbsp;&nbsp;&nbsp; "sodiumContent": "<span class="element">{{recipesodiumcontent}}</span>"</span><span style="display:none" class="sugarcontent">,
                    <br>&nbsp;&nbsp;&nbsp;&nbsp; "sugarContent": "<span class="element">{{recipesugarcontent}}</span>"</span><span style="display:none" class="transfatcontent">,
                    <br>&nbsp;&nbsp;&nbsp;&nbsp; "transFatContent": "<span class="element">{{recipetransfatcontent}}</span>"</span><span style="display:none" class="unsaturatedfatcontent">,
                    <br>&nbsp;&nbsp;&nbsp;&nbsp; "unsaturatedFatContent": "<span class="element">{{recipeunsaturatedfatcontent}}</span>"</span>
                    <br>&nbsp;&nbsp;&nbsp; },
                    </span>

                    <!--suitable for diet -->
                    <span style="display:none" class="GlutenFreeDiet"><br>&nbsp;&nbsp;&nbsp; "suitableForDiet": "<span class="element">http://schema.org/GlutenFreeDiet</span>",</span>
                    <span style="display:none" class="HalalDiet"><br>&nbsp;&nbsp;&nbsp; "suitableForDiet": "<span class="element">http://schema.org/HalalDiet</span>",</span>
                    <span style="display:none" class="HinduDiet"><br>&nbsp;&nbsp;&nbsp; "suitableForDiet": "<span class="element">http://schema.org/HinduDiet</span>",</span>
                    <span style="display:none" class="KosherDiet"><br>&nbsp;&nbsp;&nbsp; "suitableForDiet": "<span class="element">http://schema.org/KosherDiet</span>",</span>
                    <span style="display:none" class="LowCalorieDiet"><br>&nbsp;&nbsp;&nbsp; "suitableForDiet": "<span class="element">http://schema.org/LowCalorieDiet</span>",</span>
                    <span style="display:none" class="LowFatDiet"><br>&nbsp;&nbsp;&nbsp; "suitableForDiet": "<span class="element">http://schema.org/LowFatDiet</span>",</span>
                    <span style="display:none" class="LowLactoseDiet"><br>&nbsp;&nbsp;&nbsp; "suitableForDiet": "<span class="element">http://schema.org/LowLactoseDiet</span>",</span>
                    <span style="display:none" class="LowSaltDiet"><br>&nbsp;&nbsp;&nbsp; "suitableForDiet": "<span class="element">http://schema.org/LowSaltDiet</span>",</span>
                    <span style="display:none" class="VeganDiet"><br>&nbsp;&nbsp;&nbsp; "suitableForDiet": "<span class="element">http://schema.org/VeganDiet</span>",</span>
                    <span style="display:none" class="VegetarianDiet"><br>&nbsp;&nbsp;&nbsp; "suitableForDiet": "<span class="element">http://schema.org/VegetarianDiet</span>",</span>

                    <!--end of markup-->
                    <!--recipe category -->
                    <br>&nbsp;&nbsp;&nbsp; "recipeCategory": "<span class="element"><span style="display:none" class="appetizer">appetizer</span><span style="display:none" class="entree">entree</span><span style="display:none" class="dessert">dessert</span></span>"

                    <br>&nbsp;}
                    <br>&nbsp; &lt;/script&gt;
                </p>

                <hr>
                <h4>More on Recipe Schema:</h4>
                <p>
                    <ul>
                        <li><a href="https://developers.google.com/search/docs/data-types/recipes">Google's Recipe Structured Data Documentation</a></li>
                        <li><a href="http://schema.org/Recipe">Schema.org's Recipe Documentation</a></li>
                    </ul>
                </p>
            </div>
            <!--recipe-->
            <div class="tab-pane" id="website-schema">
                <h2>WebSite Schema: Your Site Name, Sitelinks Searchbox</h2>
                <h4>Fill in the textbox below. The JSON-LD and Microdata below will update. Then copy the text and paste the following code into <a href="https://search.google.com/structured-data/testing-tool/u/0/">Google's Stuctured Data Testing Tool</a>!</h4>
                <!--Required markup input text boxes-->
                <div class="center-block">
                    <input class="center-block" type="text" ng-model="websitename" placeholder="Your site's name for search results">
                    <input class="center-block" type="text" ng-model="websitealternatename" placeholder="An alternative name for your site in search results">
                    <input class="center-block" type="text" ng-model="websiteurl" placeholder="Domain of website (http:// or https:// included)">

                    <div class="sitelinks-searchbox" style="display:none">
                        <input class="center-block" type="text" ng-model="websitetarget" placeholder="URL for internal site search before query (ex. https://query.example.com/search?q=)">
                        <input class="center-block" type="text" ng-model="websitetarget2" placeholder="Optional: Any characters in the URL for internal site search that occur after the query">
                    </div>
                </div>

                <br>
                <!--buttons-->
                <div class="row" style="text-align:center">
                    <div class="col-md-12">
                        <button type="button" id="sitelinks-searchbox" class="btn btn-primary btn-lg">+Sitelinks Searchbox</button>
                    </div>
                </div>

                <hr>
                <h4>JSON-LD:</h4>
                <p>
                    <br>&nbsp; &lt;script type="application/ld+json"&gt;
                    <br>&nbsp; {
                    <br>&nbsp;&nbsp;&nbsp; "@context": "http://schema.org/",
                    <br>&nbsp;&nbsp;&nbsp; "@type": "WebSite",
                    <br>&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{websitename}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "alternateName": "<span class="element">{{websitealternatename}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "url": "<span class="element">{{websiteurl}}</span>"<span class="sitelinks-searchbox" style="display:none">,
                  <br>&nbsp;&nbsp;&nbsp; "potentialAction": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  "@type": "SearchAction",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   "target": "<span class="element">{{websitetarget}}</span>{search_term_string}<span class="element">{{websitetarget2}}</span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "query-input": "required name=search_term_string"
                    <br>&nbsp;&nbsp;&nbsp; }
                    </span>
                    <br>&nbsp;}
                    <br>&nbsp; &lt;/script&gt;
                </p>

                <hr>

                <h4>Microdata:</h4>
                <h5><b>Note:</b> This microdata is only a sample for demonstrative purposes. Microdata should be wrapped around elements within your HTML page.</h5>

                <p>
                    <br>&nbsp; &lt;div itemscope itemtype="http://schema.org/WebSite"&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;meta itemprop="url" content="{{websiteurl}}" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;meta itemprop="name" content="{{websitename}}" /&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;meta itemprop="alternativeName" content="{{websitealternativename}}" /&gt;

                    <!--sitelinks-searchbox -->
                    <span class="sitelinks-searchbox" style="display:none">
          <br>&nbsp;&nbsp;&nbsp;  &lt;form itemprop="potentialAction" itemscope itemtype="http://schema.org/SearchAction"&gt;
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    &lt;meta itemprop="target" content="{{websitetarget}}{search_term_string}{{websitetarget2}}"/&gt;
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &lt;input itemprop="query-input" type="text" name="search_term_string" required/&gt;
          <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;     &lt;input type="submit"/&gt;
          <br>&nbsp;&nbsp;&nbsp; &lt;/form&gt;
            </span>
                    <br>&nbsp; &lt;/div&gt;
                </p>

                <hr>

                <h4>More on WebSite Schema:</h4>
                <p>
                    <ul>
                        <li><a href="https://developers.google.com/search/docs/data-types/sitename">Google's Your Site Name in Results Structured Data Documentation</a></li>
                        <li><a href="https://developers.google.com/search/docs/data-types/sitelinks-searchbox">Google's Sitelinks Searchbox Structured Data Documentation</a></li>
                        <li><a href="http://schema.org/WebSite">Schema.org's WebSite Documentation</a></li>
                        <li><a href="https://schema.org/docs/actions.html">Schema.org's potentialAction Documentation</a></li>
                    </ul>
                </p>

            </div>
            <!--website-->

            <div class="tab-pane" id="question-schema">
                <h2>Question Schema</h2>
                <h4>Fill in the textbox below. The JSON-LD and Microdata below will update. Then copy the text and paste the following code into <a href="https://search.google.com/structured-data/testing-tool/u/0/">Google's Stuctured Data Testing Tool</a>!</h4>
                <!--Required markup input text boxes-->
                <div class="center-block">
                    <input class="center-block" type="text" ng-model="questionquestion" placeholder="Question being answered">
                    <input class="center-block" type="text" ng-model="questiondatecreated" placeholder="Date the question was created, DD-MM-20YY">
                    <input class="center-block" type="text" ng-model="questionanswer" placeholder="Answer to the question">
                    <br>
                    <select id="author-or-organization" class="center-block" style="width:70%">
                        <option value="Select Option">Select Option Below:</option>
                        <option value="Qauthor">Author</option>
                        <option value="organization">Organization</option>
                    </select>
                    <input class="center-block" type="text" ng-model="questionname" placeholder="Author or Organization's Name">
                </div>

                <hr>
                <h4>JSON-LD:</h4>
                <p>
                    <br>&nbsp; &lt;script type="application/ld+json"&gt;
                    <br>&nbsp; {
                    <br>&nbsp;&nbsp;&nbsp; "@context": "http://schema.org/",
                    <br>&nbsp;&nbsp;&nbsp; "@type": "Question",
                    <br>&nbsp;&nbsp;&nbsp; "text": "<span class="element">{{questionquestion}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "dateCreated": "<span class="element">{{questiondatecreated}}</span>",
                    <br>&nbsp;&nbsp;&nbsp; "acceptedAnswer": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "Answer",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "text": "<span class="element">{{questionanswer}}</span>",
                    <!-- Oranization or Author -->
                    <br>&nbsp;&nbsp;&nbsp; "<span class="element"><span style="display:none" class="author-itemtype">author</span><span style="display:none" class="organization-itemtype">organization</span></span>": {
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "@type": "<span class="element"><span style="display:none" class="author-itemtype">Person</span><span style="display:none" class="organization-itemtype">Organization</span></span>",
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "name": "<span class="element">{{questionname}}</span>"
                    <br>&nbsp;&nbsp;&nbsp; }
                    </span>
                    <br>&nbsp;&nbsp;&nbsp; }
                    <br>&nbsp;}
                    <br>&nbsp; &lt;/script&gt;
                </p>

                <hr>

                <h4>Microdata:</h4>
                <h5><b>Note:</b> This microdata is only a sample for demonstrative purposes. Microdata should be wrapped around elements within your HTML page.</h5>
                <p>
                    <br>&nbsp; &lt;div itemscope itemtype="http://schema.org/Question"&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="text"&gt;<span class="element">{{questionquestion}}</span>&lt;/span&gt;
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="dateCreated"&gt;<span class="element">{{questiondatecreated}}</span>&lt;/span&gt;

                    <!-- Oranization or Author Microdata -->
                    <br>&nbsp;&nbsp;&nbsp; &lt;span itemprop="<span class="element"><span style="display:none" class="author-itemtype">author</span><span style="display:none" class="organization-itemtype">organization</span></span>" itemscope itemtype="http://schema.org/<span class="element"><span style="display:none" class="author-itemtype">Person</span><span style="display:none" class="organization-itemtype">Organization</span></span>"&gt;
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;span itemprop="name"&gt;<span class="element">{{questionname}}</span>&lt;/span&gt;
                    <br>&nbsp; &lt;/div&gt;
                </p>

                <hr>

                <h4>More on Question Schema:</h4>
                <p>
                    <ul>
                        <li><a href="http://schema.org/Question">Schema.org's Question Documentation</a></li>
                    </ul>
                </p>

            </div>
            <!--question-->
        </div>
        <!--closes the tab content-->

    </div>
    <!--closes the container-->

    <div id="disqus_thread"></div>
    <script>
        disqus();
        setCurrent()
    </script>

    <style>
        @-webkit-keyframes fadeInUp {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }
            100% {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        .fadeInUp {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
        }

        input {
            margin-top: 1em;
            height: 10 px;
            font-size: 12px;
            width: 80%;
        }

        p {
            font-family: Courier;
            font-size: 1em;
        }

        .element {
            font-style: bold;
            background-color: #FFFF00;
        }
    </style>

    <script>
        $(document).ready(function() {

            //Display Availability Options
            $("#availability").click(function() {
                $(".availability-options").css("display", "");
            });

            //Availability -- > Update JSON-LD when option is selected
            $(function() {
                $("#Pavailability-block").change(function() {
                    var val = $(this).val();
                    if (val === "PDiscontinued") {
                        $(".PDiscontinued").css("display", "");
                    } else if (val === "PInStock") {
                        $(".PInStock").css("display", "");
                    } else if (val === "PInStoreOnly") {
                        $(".PInStoreOnly").css("display", "");
                    } else if (val === "PLimitedAvailability") {
                        $(".PLimitedAvailability").css("display", "");
                    } else if (val === "POnlineOnly") {
                        $(".POnlineOnly").css("display", "");
                    } else if (val === "POutOfStock") {
                        $(".POutOfStock").css("display", "");
                    } else if (val === "PPreOrder") {
                        $(".PPreOrder").css("display", "");
                    } else if (val === "PPreSale") {
                        $(".PPreSale").css("display", "");
                    } else if (val === "PSoldOut") {
                        $(".PSoldOut").css("display", "");
                    }
                });
            });

            //Aggregate rating
            $("#Paggregate-rating-button").click(function() {
                $(".Paggregate-rating").css("display", "");
            });

            //Price Valid Until/Sale
            $("#sale-button").click(function() {
                $(".Psale").css("display", "");
            });

            //Item Condition
            $("#condition-button").click(function() {
                $(".condition-options").css("display", "");
            });

            //Condition -- > Update JSON-LD when option is selected
            $(function() {
                $("#condition-block").change(function() {
                    var val = $(this).val();
                    if (val === "DamagedCondition") {
                        $(".DamagedCondition").css("display", "");
                    } else if (val === "NewCondition") {
                        $(".NewCondition").css("display", "");
                    } else if (val === "RefurbishedCondition") {
                        $(".RefurbishedCondition").css("display", "");
                    } else if (val === "UsedCondition") {
                        $(".UsedCondition").css("display", "");
                    }
                });
            });

            //SKU, GTIN, MPN
            $("#sku").click(function() {
                $(".sku").css("display", "");
            });
            $("#gtin8").click(function() {
                $(".gtin8").css("display", "");
            });
            $("#gtin13").click(function() {
                $(".gtin13").css("display", "");
            });
            $("#gtin14").click(function() {
                $(".gtin14").css("display", "");
            });
            $("#mpn").click(function() {
                $(".mpn").css("display", "");
            });

            //article
            $("#datemodified").click(function() {
                $(".datemodified").css("display", "");
            });

            $(function() {
                $("#author").change(function() {
                    var val = $(this).val();
                    if (val === "person") {
                        $(".organizationauthor").css("display", "none");
                        $(".personauthor").css("display", "");
                    } else if (val === "organization") {
                        $(".personauthor").css("display", "none");
                        $(".organizationauthor").css("display", "");
                    }
                });
            });

            //breadcrumbs
            //listitems
            $("#listitem4").click(function() {
                $(".listitem4").css("display", "");
            });

            $("#listitem5").click(function() {
                $(".listitem5").css("display", "");
            });

            //images
            $("#img1").click(function() {
                $(".img1").css("display", "");
            });

            $("#img2").click(function() {
                $(".img2").css("display", "");
            });

            $("#img3").click(function() {
                $(".img3").css("display", "");
            });

            $("#img4").click(function() {
                $(".img4").css("display", "");
            });

            $("#img5").click(function() {
                $(".img5").css("display", "");
            });

            //events
            $("#enddate").click(function() {
                $(".enddate").css("display", "");
            });

            //Display Availability Options
            $("#availability").click(function() {
                $(".availability-options").css("display", "");
            });

            //Availability -- > Update JSON-LD when option is selected
            $(function() {
                $("#availability-block").change(function() {
                    var val = $(this).val();
                    if (val === "Discontinued") {
                        $(".Discontinued").css("display", "");
                    } else if (val === "InStock") {
                        $(".InStock").css("display", "");
                    } else if (val === "InStoreOnly") {
                        $(".InStoreOnly").css("display", "");
                    } else if (val === "LimitedAvailability") {
                        $(".LimitedAvailability").css("display", "");
                    } else if (val === "OnlineOnly") {
                        $(".OnlineOnly").css("display", "");
                    } else if (val === "OutOfStock") {
                        $(".OutOfStock").css("display", "");
                    } else if (val === "PreOrder") {
                        $(".PreOrder").css("display", "");
                    } else if (val === "PreSale") {
                        $(".PreSale").css("display", "");
                    } else if (val === "SoldOut") {
                        $(".SoldOut").css("display", "");
                    }
                });
            });

            $("#performer").click(function() {
                $(".performer").css("display", "");
            });

            $("#offers").click(function() {
                $(".offers").css("display", "");
            });

            $("#sale").click(function() {
                $(".sale").css("display", "");
            });

            $(function() {
                $("#performeroptions").change(function() {
                    var val = $(this).val();
                    if (val === "person") {
                        $(".performinggroup").css("display", "none");
                        $(".person").css("display", "");
                    } else if (val === "performinggroup") {
                        $(".person").css("display", "none");
                        $(".performinggroup").css("display", "");
                    }
                });
            });

            //itemlist
            //extra list items
            $("#listitem4").click(function() {
                $(".listitem4").css("display", "");
            });

            $("#listitem5").click(function() {
                $(".listitem5").css("display", "");
            });

            //order
            $("#itemlistorder").click(function() {
                $(".itemlistorder").css("display", "");
            });

            //#of items
            $("#numberofitems").click(function() {
                $(".numberofitems").css("display", "");
            });

            //List Item Type -- > Update JSON-LD when option is selected
            $(function() {
                $("#listitemtype").change(function() {
                    var val = $(this).val();
                    if (val === "thing") {
                        $(".product").css("display", "none");
                        $(".article").css("display", "none");
                        $(".event").css("display", "none");
                        $(".place").css("display", "none");
                        $(".musicrecording").css("display", "none");
                        $(".musicgroup").css("display", "none");
                        $(".recipe").css("display", "none");

                        $(".thing").css("display", "");
                    } else if (val === "recipe") {
                        $(".thing").css("display", "none");
                        $(".article").css("display", "none");
                        $(".product").css("display", "none");
                        $(".event").css("display", "none");
                        $(".place").css("display", "none");
                        $(".musicrecording").css("display", "none");
                        $(".musicgroup").css("display", "none");

                        $(".recipe").css("display", "");
                    } else if (val === "product") {
                        $(".thing").css("display", "none");
                        $(".article").css("display", "none");
                        $(".event").css("display", "none");
                        $(".place").css("display", "none");
                        $(".musicrecording").css("display", "none");
                        $(".musicgroup").css("display", "none");
                        $(".recipe").css("display", "none");

                        $(".product").css("display", "");
                    } else if (val === "article") {
                        $(".thing").css("display", "none");
                        $(".product").css("display", "none");
                        $(".event").css("display", "none");
                        $(".place").css("display", "none");
                        $(".musicrecording").css("display", "none");
                        $(".musicgroup").css("display", "none");
                        $(".recipe").css("display", "none");

                        $(".article").css("display", "");
                    } else if (val === "event") {
                        $(".thing").css("display", "none");
                        $(".product").css("display", "none");
                        $(".article").css("display", "none");
                        $(".place").css("display", "none");
                        $(".musicrecording").css("display", "none");
                        $(".musicgroup").css("display", "none");
                        $(".recipe").css("display", "none");

                        $(".event").css("display", "");
                    } else if (val === "place") {
                        $(".thing").css("display", "none");
                        $(".product").css("display", "none");
                        $(".article").css("display", "none");
                        $(".event").css("display", "none");
                        $(".musicrecording").css("display", "none");
                        $(".musicgroup").css("display", "none");
                        $(".recipe").css("display", "none");

                        $(".place").css("display", "");
                    } else if (val === "musicrecording") {
                        $(".thing").css("display", "none");
                        $(".product").css("display", "none");
                        $(".article").css("display", "none");
                        $(".event").css("display", "none");
                        $(".place").css("display", "none");
                        $(".musicgroup").css("display", "none");
                        $(".recipe").css("display", "none");

                        $(".musicrecording").css("display", "");
                    } else if (val === "musicgroup") {
                        $(".thing").css("display", "none");
                        $(".product").css("display", "none");
                        $(".article").css("display", "none");
                        $(".event").css("display", "none");
                        $(".place").css("display", "none");
                        $(".musicrecording").css("display", "none");
                        $(".recipe").css("display", "none");

                        $(".musicgroup").css("display", "");
                    }
                });
            });

            $(function() {
                $("#itemlistorder2").change(function() {
                    var val = $(this).val();
                    if (val === "itemlistorderdescending") {
                        $(".itemlistorderascending").css("display", "none");
                        $(".itemlistorderunordered").css("display", "none");

                        $(".itemlistorderdescending").css("display", "");
                    } else if (val === "itemlistorderascending") {
                        $(".itemlistorderdescending").css("display", "none");
                        $(".itemlistorderunordered").css("display", "none");

                        $(".itemlistorderascending").css("display", "");
                    } else if (val === "itemlistorderunordered") {
                        $(".itemlistorderdescending").css("display", "none");
                        $(".itemlistorderascending").css("display", "none");

                        $(".itemlistorderunordered").css("display", "");
                    }
                });
            });
            //geo
            $("#geo").click(function() {
                $(".geo").css("display", "");
            });

            //aggregate-rating
            $("#LBaggregate-rating").click(function() {
                $(".LBaggregate-rating").css("display", "");
            });

            //hasmap
            $("#hasmap").click(function() {
                $(".hasmap").css("display", "");
            });

            //#opening-hours #opening-hours-week
            $("#opening-hours").click(function() {
                $(".opening-hours-week").css("display", "");
                $(".opening-hours").css("display", "");
            });

            //Weekday
            $("#weekday").click(function() {
                $(".weekday").css("display", "");
            });

            //Weekend
            $("#weekend").click(function() {
                $(".weekend").css("display", "");
            });

            //Monday
            $("#monday").click(function() {
                $(".monday").css("display", "");
            });

            //Tuesday
            $("#tuesday").click(function() {
                $(".tuesday").css("display", "");
            });

            //Wednesday
            $("#wednesday").click(function() {
                $(".wednesday").css("display", "");
            });

            //Thursday
            $("#thursday").click(function() {
                $(".thursday").css("display", "");
            });

            //Friday
            $("#friday").click(function() {
                $(".friday").css("display", "");
            });

            //Saturday
            $("#saturday").click(function() {
                $(".saturday").css("display", "");
            });

            //Sunday
            $("#sunday").click(function() {
                $(".sunday").css("display", "");
            });

            //organization
            //social media
            $("#twitter").click(function() {
                $(".twitter").css("display", "");
            });
            $("#google").click(function() {
                $(".google").css("display", "");
            });
            $("#instagram").click(function() {
                $(".instagram").css("display", "");
            });
            $("#youtube").click(function() {
                $(".youtube").css("display", "");
            });
            $("#linkedin").click(function() {
                $(".linkedin").css("display", "");
            });
            $("#myspace").click(function() {
                $(".myspace").css("display", "");
            });
            $("#pinterest").click(function() {
                $(".pinterest").css("display", "");
            });
            $("#soundcloud").click(function() {
                $(".soundcloud").css("display", "");
            });
            $("#tumblr").click(function() {
                $(".tumblr").css("display", "");
            });

            //additional #s
            $("#technicalsupport").click(function() {
                $(".technicalsupport").css("display", "");
            });
            $("#billingsupport").click(function() {
                $(".billingsupport").css("display", "");
            });
            $("#billpayment").click(function() {
                $(".billpayment").css("display", "");
            });
            $("#sales").click(function() {
                $(".sales").css("display", "");
            });
            $("#reservations").click(function() {
                $(".reservations").css("display", "");
            });
            $("#creditcardsupport").click(function() {
                $(".creditcardsupport").css("display", "");
            });
            $("#emergency").click(function() {
                $(".emergency").css("display", "");
            });
            $("#baggagetracking").click(function() {
                $(".baggagetracking").css("display", "");
            });
            $("#roadsideassistance").click(function() {
                $(".roadsideassistance").css("display", "");
            });
            $("#packagetracking").click(function() {
                $(".packagetracking").css("display", "");
            });

            //question
            //Availability -- > Update JSON-LD when option is selected
            $(function() {
                $("#author-or-organization").change(function() {
                    var val = $(this).val();
                    if (val === "Qauthor") {
                        $(".organization-itemtype").css("display", "none");
                        $(".author-itemtype").css("display", "");
                    } else if (val === "organization") {
                        $(".author-itemtype").css("display", "none");
                        $(".organization-itemtype").css("display", "");
                    }
                });

            });

            //recipe
            //nutrition
            $("#nutrition").click(function() {
                $(".nutrition").css("display", "");
            });

            //Aggregate rating
            $("#Raggregate-rating-button").click(function() {
                $(".Raggregate-rating").css("display", "");
            });

            //author
            $("#Rauthor").click(function() {
                $(".Rauthor").css("display", "");
            });

            //recipe category
            $(function() {
                $("#recipecategory").change(function() {
                    var val = $(this).val();
                    if (val === "appetizer") {
                        $(".entree").css("display", "none");
                        $(".dessert").css("display", "none");

                        $(".appetizer").css("display", "");
                    } else if (val === "entree") {
                        $(".appetizer").css("display", "none");
                        $(".dessert").css("display", "none");

                        $(".entree").css("display", "");
                    } else if (val === "dessert") {
                        $(".appetizer").css("display", "none");
                        $(".entree").css("display", "none");

                        $(".dessert").css("display", "");
                    }

                });
            });

            //time
            $("#preptime").click(function() {
                $(".preptime").css("display", "");
            });

            $("#cooktime").click(function() {
                $(".cooktime").css("display", "");
            });

            $("#totaltime").click(function() {
                $(".totaltime").css("display", "");
            });

            //yield
            $("#recipeyield").click(function() {
                $(".recipeyield").css("display", "");
            });

            //ingredients
            $("#ingredient1").click(function() {
                $(".ingredient1").css("display", "");
            });
            $("#ingredient2").click(function() {
                $(".ingredient2").css("display", "");
            });
            $("#ingredient3").click(function() {
                $(".ingredient3").css("display", "");
            });
            $("#ingredient4").click(function() {
                $(".ingredient4").css("display", "");
            });
            $("#ingredient5").click(function() {
                $(".ingredient5").css("display", "");
            });
            $("#ingredient6").click(function() {
                $(".ingredient6").css("display", "");
            });
            $("#ingredient7").click(function() {
                $(".ingredient7").css("display", "");
            });
            $("#ingredient8").click(function() {
                $(".ingredient8").css("display", "");
            });
            $("#ingredient9").click(function() {
                $(".ingredient9").css("display", "");
            });
            $("#ingredient10").click(function() {
                $(".ingredient10").css("display", "");
            });

            //instructions
            $("#instructions1").click(function() {
                $(".instructions1").css("display", "");
            });
            $("#instructions2").click(function() {
                $(".instructions2").css("display", "");
            });
            $("#instructions3").click(function() {
                $(".instructions3").css("display", "");
            });
            $("#instructions4").click(function() {
                $(".instructions4").css("display", "");
            });
            $("#instructions5").click(function() {
                $(".instructions5").css("display", "");
            });
            $("#instructions6").click(function() {
                $(".instructions6").css("display", "");
            });
            $("#instructions7").click(function() {
                $(".instructions7").css("display", "");
            });
            $("#instructions8").click(function() {
                $(".instructions8").css("display", "");
            });
            $("#instructions9").click(function() {
                $(".instructions9").css("display", "");
            });
            $("#instructions10").click(function() {
                $(".instructions10").css("display", "");
            });

            //nutrition
            $("#calories").click(function() {
                $(".calories").css("display", "");
            });
            $("#calories").click(function() {
                $(".calories").css("display", "");
            });
            $("#calories").click(function() {
                $(".calories").css("display", "");
            });

            $("#calories").click(function() {
                $(".calories").css("display", "");
            });
            $("#servingsize").click(function() {
                $(".servingsize").css("display", "");
            });

            $("#fatcontent").click(function() {
                $(".fatcontent").css("display", "");
            });

            $("#carbohydratecontent").click(function() {
                $(".carbohydratecontent").css("display", "");
            });

            $("#fibercontent").click(function() {
                $(".fibercontent").css("display", "");
            });

            $("#proteincontent").click(function() {
                $(".proteincontent").css("display", "");
            });
            $("#cholesterolcontent").click(function() {
                $(".cholesterolcontent").css("display", "");
            });
            $("#saturatedfatcontent").click(function() {
                $(".saturatedfatcontent").css("display", "");
            });
            $("#sodiumcontent").click(function() {
                $(".sodiumcontent").css("display", "");
            });
            $("#sugarcontent").click(function() {
                $(".sugarcontent").css("display", "");
            });
            $("#transfatcontent").click(function() {
                $(".transfatcontent").css("display", "");
            });
            $("#unsaturatedfatcontent").click(function() {
                $(".unsaturatedfatcontent").css("display", "");
            });

            //suitable for diet
            $("#suitablefordiet1").click(function() {
                $(".suitablefordiet1").css("display", "");
            });

            $(function() {
                $("#suitablefordiet").change(function() {
                    var val = $(this).val();
                    if (val === "GlutenFreeDiet") {
                        $(".GlutenFreeDiet").css("display", "");
                    } else if (val === "HalalDiet") {
                        $(".HalalDiet").css("display", "");
                    } else if (val === "HinduDiet") {
                        $(".HinduDiet").css("display", "");
                    } else if (val === "KosherDiet") {
                        $(".KosherDiet").css("display", "");
                    } else if (val === "LowCalorieDiet") {
                        $(".LowCalorieDiet").css("display", "");
                    } else if (val === "LowFatDiet") {
                        $(".LowFatDiet").css("display", "");
                    } else if (val === "LowLactoseDiet") {
                        $(".LowLactoseDiet").css("display", "");
                    } else if (val === "LowSaltDiet") {
                        $(".LowSaltDiet").css("display", "");
                    } else if (val === "VeganDiet") {
                        $(".VeganDiet").css("display", "");
                    } else if (val === "VegetarianDiet") {
                        $(".VegetarianDiet").css("display", "");
                    }

                });
            });

            //website
            //Display Sitelink Searchbox Options
            $("#sitelinks-searchbox").click(function() {
                $(".sitelinks-searchbox").css("display", "");
            });

        }); //doc ready function
    </script>
