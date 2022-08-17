<script>
    $(document).ready( function() {
 $.getJSON("json_data.json", function(data){
       $.each(data.person, function(){
         $("ul").append("<li>Name: "+this['name']+"</li>
                                <li>Age: "+this['age']+"</li>
                                <br />");
   });
 });
</script>
<div class="col-md-6">
    <div class="main-card mb-3 card">
        <div class="card-body-timeline">
            <h5 class="card-title">User Timeline</h5>
            <div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                <div class="vertical-timeline-item vertical-timeline-element">
                    <div>
                        <span class="vertical-timeline-element-icon bounce-in">
                            <i class="badge badge-dot badge-dot-xl badge-success"></i>
                        </span>
                        <div class="vertical-timeline-element-content bounce-in">
                            <h4 class="timeline-title">Meeting with client</h4>
                            <p>Meeting with USA Client, today at <a href="javascript:void(0);" data-abc="true">12:00
                                    PM</a></p>
                            <span class="vertical-timeline-element-date">9:30 AM</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>