
<!-- Copy end right-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script>

    $("#file-3").fileinput({
        theme: 'fa',
        showUpload: false,
        showCaption: false,
        browseClass: "btn btn-primary btn-lg",
        fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
        overwriteInitial: false,
        initialPreviewAsData: true,
        initialPreview: [

        ],
        initialPreviewConfig: [

        ]
    });

    $(document).ready(function () {
        var count=0;
        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".btn-danger").click(function (e) {
            if ($('#name').val()=='' || $('#address').val()=='' || $('#text1').val()=='' || $('#postal').val()==''){
                if ($('#name').val()=='') {
                    $('#name').css("border", "1px solid red");
                }
                if  ($('#name').val()!='')
                {
                    $('#name').css("border", "1px solid #eee");
                }
                if ($('#address').val()=='') {
                    $('#address').css("border", "1px solid red");
                }
                if  ($('#address').val()!='')
                {
                    $('#address').css("border", "1px solid #eee");
                }
                if ($('#text1').val()=='') {
                    $('#text1').css("border", "1px solid red");
                }
                if  ($('#text1').val()!='')
                {
                    $('#text1').css("border", "1px solid #eee");
                }
                if ($('#postal').val()=='') {
                    $('#postal').css("border", "1px solid red");
                }
                if  ($('#postal').val()!='')
                {
                    $('#postal').css("border", "1px solid #eee");
                }
            }
            else{
                var $active = $('.wizard .nav-wizard li.active');
                $active.next().removeClass('disabled');
                nextTab($active);
            }

        });

        // $("#save").click(function (e) {
        //     if ($('#available').val()=='' || $('#footage').val()=='' || $('#price').val()=='') {
        //         alert("Enter required Fields")
        //         return false;
        //     }
        //     return false;
        // });


    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

</script>

<script>
    function openRightMenu() {
        document.getElementById("rightMenu").style.display = "block";
        document.getElementById("overlay").style.display = "block";

    }

    function closeRightMenu() {
        document.getElementById("rightMenu").style.display = "none";
        document.getElementById("overlay").style.display = "none";
    }
</script>
</body>
</html>