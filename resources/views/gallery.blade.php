@extends('layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER -->
    <div class="page-header section-divider-bottom-1">
        <div class="container">
            <div class="row">
                <div class="col center">
                    <h1 class="page-title">Wedding Gallery</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE HEADER -->


    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">

        <!-- BEGIN MAIN CONTENT -->
        <main class="main">

            <!-- BEGIN GALLERY -->
            <div class="gallery">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery-img1.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery-thumb1.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery-img2.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery-thumb2.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery-img3.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery-thumb3.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="w-100"></div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery-img4.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery-thumb4.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery-img5.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery-thumb5.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery-img6.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery-thumb6.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="w-100"></div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery-img7.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery-thumb7.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery-img8.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery-thumb8.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery-img9.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery-thumb9.jpg') }}" alt="" />
                            </div>
                        </div>
                </div>

                <!-- BEGIN PAGINATION -->
                <div class="pagination">
                    <ul id="pages">
                        <li><a href="#" class="active">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>

                    <ul id="previous">
                        <li><a href="#"><i class="fas fa-chevron-left"></i></a></li>
                    </ul>
                    <ul id="next">
                        <li><a href="#"><i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </div>
                <!-- END PAGINATION -->

            </div>
            <!-- END GALLERY -->

        </main>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END PAGE CONTENT -->
@endsection
