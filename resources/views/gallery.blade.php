@include('header')
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(img/blog-img/3.jpg);">
    <div class="bradcumbContent">
        <h2>Gallery</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->
<div class="gallery agile" id="gallery">
    <div class="container col-md-12 align-content-center">
        <div class="agile_gallery_grids w3-agile">
            <ul class="clearfix">
                <li>
                    <div class="section-padding-100 ">
                    @foreach($galleries = \App\Gallery::all() as $gallery)
                        <a href="images/gallery/{{$gallery->file}}" data-fancybox="gallery"
                           data-caption="{{$gallery->description}}" title="{{$gallery->title}}">
                            <img class="mt-15" style="height: 220px; width: 230px; border: solid 1px;" src="images/gallery/{{$gallery->file}}" alt="" />
                        </a>
                    @endforeach
                    </div>
                </li>
            </ul>
        </div>
</div>
</div>


<!-- //gallery -->


@include('footer')
<script src="js/jquery.fancybox.min.js"></script>
<script type="text/javascript">
    $("[data-fancybox]").fancybox({ });
</script>
