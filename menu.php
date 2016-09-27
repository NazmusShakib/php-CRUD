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

<div class="cf nestable-lists">
    <div class="dd" id="nestable">




        <?php include('db-connect.php'); ?>

        <?php

        //        $query = "SELECT m.menu_id,m.name as menu,m1.menu_id menu_id2,m1.name as menu1,m2.menu_id menu_id2, m2.name as menu2
        //                        FROM `menus` m
        //                        left join menus m1 on m1.parent_id=m.menu_id
        //                        left join menus m2 on m2.parent_id=m1.menu_id
        //                        WHERE m.`position`=0";
        function getMenu($parent_id, $position)
        {
            global $link;
            $query = "SELECT m.menu_id,m.name,m.position,m.parent_id FROM `menus` m WHERE m.`position`='$position' and m.parent_id='$parent_id' ORDER BY menu_order";
            $exe = mysqli_query($link, $query);
            $menu = mysqli_fetch_all($exe, MYSQLI_ASSOC);

            $nav ='';
            if(count($menu)>0) {
                $nav .= '<ol class="dd-list">';
                foreach ($menu as $item):
                    $nav .= '<li class="dd-item" data-id="' . $item['menu_id'] . '" data-value="' . $item['name'] . '"><div class="dd-handle">' . $item['name'] . '</div>';
                    $nav .= getMenu($item['menu_id'], $item['position']+1);
                    $nav .= '</li>';
                endforeach;
                $nav .= '</ol>';
            }
            return $nav;
        }

        echo getMenu(0,0);
        ?>
    </div>
</div>


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
