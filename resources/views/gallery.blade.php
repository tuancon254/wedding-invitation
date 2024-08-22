@extends('layouts.app')

@section('content')
    <!-- BEGIN PAGE HEADER -->
    <div class="page-header section-divider-bottom-1">
        <div class="container">
            <div class="row">
                <div class="col center">
                    <h1 class="page-title">Pre Wedding Gallery</h1>
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
                                    <a class="btn btn-light" href="{{ asset('images/gallery/1.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery/2.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery/2.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery/1.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery/3.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery/3.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="w-100"></div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery/4.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery/4.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery/5.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery/5.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery/10.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery/12.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="w-100"></div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery/7.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery/11.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery/8.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery/8.jpg') }}" alt="" />
                            </div>
                        </div>

                        <div class="col-sm">
                            <div class="item">
                                <div class="hover-info">
                                    <a class="btn btn-light" href="{{ asset('images/gallery/9.jpg') }}" data-lightbox="WeddingPhotos"
                                        title="Wedding Photos">View</a>
                                </div>
                                <img src="{{ asset('images/gallery/9.jpg') }}" alt="" />
                            </div>
                        </div>
                </div>

                <!-- BEGIN PAGINATION -->
                {{-- <div class="pagination">
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
                </div> --}}
                <!-- END PAGINATION -->

            </div>
            <!-- END GALLERY -->

        </main>
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END PAGE CONTENT -->
@endsection
