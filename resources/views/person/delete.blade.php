@yield('resume-delete')
<div id="myModal-resume" class="modal fade" role="dialog">

    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">

                <div class="deleteContent">
                    Are you Sure you want to delete this resume?<span id="res" class="res"></span>
                    <span
                        class="hidden"></span>
                    <span
                        class="hidden did-res" style="visibility: hidden;"></span>
                </div>
                <div class="modal-footer-resume">
                    <button type="button" class="btn actionBtn" data-dismiss="modal">
                        <span id="footer_action_button_resume" class='glyphicon'> </span>
                    </button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class='glyphicon glyphicon-remove'></span> Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
