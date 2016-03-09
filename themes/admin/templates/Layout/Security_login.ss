<div id="body-container">
    <div id="body-content">


        <div class='container'>

            <div class="signin-row row">
                <div class="span4"></div>
                <div class="span8">
                    <div class="container-signin">
                        $Content
                        $Form
                    </div>
                </div>
                <div class="span3"></div>
            </div>

            <div class="signin-row row">
                <div class="span4"></div>
                <div class="span8">
                    <div class="well well-small well-shadow">
                        <legend class="lead">Additional Content</legend>
                        Add additional content here.
                    </div>
                </div>
                <div class="span8"></div>
            </div>
            <!--<div class="span4">

                </div>-->
        </div>


    </div>
</div>

<div id="spinner" class="spinner" style="display:none;">
    Loading&hellip;
</div>
<script type="text/javascript">
    $(function(){
        document.forms['loginForm'].elements['j_username'].focus();
        $('body').addClass('pattern pattern-sandstone');
        $("[rel=tooltip]").tooltip();
    });
</script>