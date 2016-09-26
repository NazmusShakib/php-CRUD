<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en" class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html lang="en" class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html lang="en" class="lt-ie9"> <![endif]-->
<!--[if IE 9]>    <html lang="en" class="ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Nestable</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>

    <menu id="nestable-menu">
        <button type="button" data-action="expand-all">Expand All</button>
        <button type="button" data-action="collapse-all">Collapse All</button>
    </menu>

    <div class="cf nestable-lists">

        <div class="dd" id="nestable">
            <ol class="dd-list">


                <li class="dd-item" data-id="1">
                    <div class="dd-handle">Item 1</div>
                </li>


                <li class="dd-item" data-id="2">
                    <div class="dd-handle">Item 2</div>
                    <ol class="dd-list">
                        <li class="dd-item" data-id="3"><div class="dd-handle">Item 3</div></li>
                        <li class="dd-item" data-id="4"><div class="dd-handle">Item 4</div></li>
                        <li class="dd-item" data-id="5">
                            <div class="dd-handle">Item 5</div>
                            <ol class="dd-list">
                                <li class="dd-item" data-id="6"><div class="dd-handle">Item 6</div></li>
                                <li class="dd-item" data-id="7"><div class="dd-handle">Item 7</div></li>
                                <li class="dd-item" data-id="8"><div class="dd-handle">Item 8</div></li>
                            </ol>
                        </li>
                        <li class="dd-item" data-id="9"><div class="dd-handle">Item 9</div></li>
                        <li class="dd-item" data-id="10"><div class="dd-handle">Item 10</div></li>
                    </ol>
                </li>

                <li class="dd-item" data-id="11">
                    <div class="dd-handle">Item 11</div>
                </li>

                <li class="dd-item" data-id="12">
                    <div class="dd-handle">Item 12</div>
                </li>
                <li class="dd-item" data-id="13">
                    <div class="dd-handle">Item 13</div>
                </li>
                <li class="dd-item" data-id="14">
                    <div class="dd-handle">Item 14</div>
                </li>

            </ol>
        </div>
    </div>

    <p><strong>Serialised Output (per list)</strong></p>

    <textarea id="nestable-output"></textarea>

    <p>&nbsp;</p>




<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->
<script type="text/javascript" src="jQuery_v1.11.1.js"></script>
<script src="jquery.nestable.js"></script>

<script>

$(document).ready(function()
{
    var updateOutput = function(e)
    {
        var list   = e.length ? e : $(e.target),
            output = list.data('output');
        if (window.JSON) {

            $.ajax({
                type : "POST",
                dataType: "JSON",
                url : "up-action.php",
                data : {id : window.JSON.stringify(list.nestable('serialize'))},
                beforeSend : function(){},
                success : function(){},
                error : function(){}

            });

            //console.log(window.JSON.stringify(list.nestable('serialize')));
            //output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));

        } else {
            output.val('JSON browser support required for this demo.');
        }
    };

    // activate Nestable for list 1
    $('#nestable').nestable({
        group: 1
    })

    .on('change', updateOutput);

    // output initial serialised data
    updateOutput($('#nestable').data('output', $('#nestable-output')));

/*    $('#nestable-menu').on('click', function(e)
    {
        var target = $(e.target),
            action = target.data('action');
        if (action === 'expand-all') {
            $('.dd').nestable('expandAll');
        }
        if (action === 'collapse-all') {
            $('.dd').nestable('collapseAll');
        }
    });

    $('#nestable3').nestable();*/

});
</script>
</body>
</html>
