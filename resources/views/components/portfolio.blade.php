<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>Produtos em destaque</h2>
        </div>

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <ul id="portfolio-flters">
                    <li data-filter="*" class="filter-active">Todos</li>
                    @foreach ($product_categories as $product_category)
                    <li data-filter=".filter-{{ $product_category->id }}">{{ $product_category->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $product->categories[0]->id }}">
                <div class="portfolio-wrap">
                    <img src="{{ $product->photo->getUrl() }}" class="img-fluid" alt="{{ $product->name }}">
                    <div class="portfolio-info">
                        <h4>{{ $product->name }}</h4>
                        <p>{{ $product->description }}</p>
                    </div>
                    <div class="portfolio-links">
                        <a href="{{ $product->photo->getUrl() }}" data-gallery="portfolioGallery"
                            class="portfolio-lightbox" title="{{ $product->name }}"><i class="bx bx-plus"></i></a>
                        <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</section><!-- End Portfolio Section -->