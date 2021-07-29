@include('Admin.header')
<div class="span9">
    <div class="content">
        <div class="btn-controls">
            <div class="btn-box-row row-fluid">
                <a href="/gallery/create" class="btn-box big span4"><i class="icon-camera"></i><b>Add Image</b></a>
                <a href="/admin/gallery" class="btn-box big span4"><i class="icon-camera-retro"></i><b>View Image</b></a>
                <a href="/admin/reorder" class="btn-box big span4"><i class="icon-briefcase"></i><b>Reorder Images</b></a>
            </div>
            <div class="btn-box-row row-fluid">
                <a href="/admin/objectives" class="btn-box big span4"><i class="icon-eye-open"></i><b>View Objectives</b></a>
                <a href="/admin/needs" class="btn-box big span4"><i class="icon-eye-open"></i><b>View Needs</b></a>
                <a href="/admin/programs" class="btn-box big span4"><i class="icon-eye-open"></i><b>View Programs</b></a>
            </div>
            <div class="btn-box-row row-fluid">
                <a href="/admin/objective/create" class="btn-box big span4"><i class="icon-plus"></i><b>Add Objectives</b></a>
                <a href="/admin/need/create" class="btn-box big span4"><i class="icon-plus"></i><b>Add Needs</b></a>
                <a href="/admin/program/create" class="btn-box big span4"><i class="icon-plus"></i><b>Add Programs</b></a>
            </div>
            
        
            <div class="btn-box-row row-fluid">
                <a href="/admin/testimonial" class="btn-box big span4"><i class="icon-eye-open"></i><b>View Testimonials</b></a>
                <a href="/admin/testimonial/create" class="btn-box big span4"><i class="icon-plus"></i><b>Add Testimonial</b></a>
                <a href="/admin/tesReorder" class="btn-box big span4"><i class="icon-briefcase"></i><b>Reorder Testimonials</b></a>
            </div>
            <div class="btn-box-row row-fluid">
                <a href="/admin/help/create" class="btn-box big span4"><i class="icon-plus"></i><b>Add Help</b></a>
                <a href="/admin/helps" class="btn-box big span4"><i class="icon-eye-open"></i><b>View Helps</b></a>
                <a href="/admin/viewers/" class="btn-box big span4"><i class="icon-eye-open"></i><b>Visitor Counter</b></a>
            </div>
    </div>
</div>
@include('Admin.footer')
