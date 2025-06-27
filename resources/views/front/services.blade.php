@extends('layouts.front')

@section('content')

<!-- PAGE TITLE
        ================================================== -->
<section class="page-title-section top-position1 bg-img cover-background left-overlay-secondary" data-overlay-dark="9" data-background="{{ asset('front_assets/img/bg/bg-01.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-start">
                    <div class="position-relative">
                        <h1>Services</h1>
                    </div>
                    <ul>
                        <li><a href="{{URL::to('/')}}">Home</a></li>
                        <li><a href="#">Services</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES
        ================================================== -->
<section class="services">
    <div class="container">
        <div class="mb-1-9 mb-md-5 text-center wow fadeInUp" data-wow-delay="200ms">
            <span class="text-primary display-30 pb-3 text-uppercase lh-1 font-weight-700 mb-1 d-block">Our Services</span>
            <h2 class="ls-minus-2px display-5 font-weight-800 lh-1 mb-0">Logistics services</h2>
        </div>
        <div class="row mt-n2-9">
            <div class="col-lg-4 mt-2-9">
                <div class="card card-style01 border-0 bg-transparent rounded-0">
                    <div class="card-body p-0">
                        <div class="card-image">
                            <img src="{{ asset('front_assets/img/services/service-02.jpg') }}" alt="...">
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>Air Freight</h3>
                        <div class="service_desc">
                            <p>
                                At <strong>Ananta International</strong>, we offer fast, flexible, and reliable air freight solutions tailored to meet your time-sensitive shipping needs. Whether you are transporting small packages or large cargo, our global air network ensures timely and secure delivery across major international destinations.
                            </p>
                            <p>
                                Our air freight services are designed for businesses that demand speed, safety, and precision. From door-to-door delivery and airport-to-airport shipments to customs clearance and tracking, we handle every step with care and professionalism.
                            </p>

                            <h3>✅ What We Offer:</h3>
                            <ul>
                                <li>Priority and economy air freight options</li>
                                <li>Global coverage through trusted airline partners</li>
                                <li>Real-time tracking and shipment visibility</li>
                                <li>Expert handling of fragile and high-value goods</li>
                                <li>Consolidation and express shipping options</li>
                                <li>Full documentation and customs support</li>
                            </ul>

                            <p>
                                Whether it’s critical manufacturing components, medical supplies, or e-commerce inventory, we ensure your cargo reaches its destination quickly and efficiently—so your business never misses a beat.
                            </p>
                        </div>
                        <span class="read_more" style="display: inline-block;">Read More</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-2-9">
                <div class="card card-style01 border-0 bg-transparent rounded-0">
                    <div class="card-body p-0">
                        <div class="card-image">
                            <img src="{{ asset('front_assets/img/services/service-03.jpg') }}" alt="...">
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>Ocen Freight</h3>
                        <div class="service_desc">
                            <p>
                                Our <strong>Ocean Freight solutions</strong> provide a cost-effective and reliable way to move large volumes of cargo across the globe. Whether you need full container loads (FCL) or less-than-container loads (LCL), we tailor shipping services to fit your schedule, cargo type, and budget.
                            </p>
                            <p>
                                With a global network of carriers and logistics partners, we ensure smooth coordination from origin to destination, including customs clearance, documentation, and cargo tracking. Our team handles everything from port operations and warehousing to last-mile delivery.
                            </p>

                            <h3>✅ What We Offer:</h3>
                            <ul>
                                <li>Full Container Load (FCL) &amp; Less-than-Container Load (LCL) services</li>
                                <li>Global port-to-port and door-to-door shipping</li>
                                <li>End-to-end supply chain visibility with real-time tracking</li>
                                <li>Expert customs clearance and compliance support</li>
                                <li>Consolidation and deconsolidation services</li>
                                <li>Secure handling of oversized or special cargo</li>
                            </ul>

                            <p>
                                Whether you're shipping bulk goods, industrial equipment, or retail products, our ocean freight solutions help you move it securely, efficiently, and on time—anywhere in the world.
                            </p>
                        </div>
                        <span class="read_more" style="display: inline-block;">Read More</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-2-9">
                <div class="card card-style01 border-0 bg-transparent rounded-0">
                    <div class="card-body p-0">
                        <div class="card-image">
                            <img src="{{ asset('front_assets/img/services/service-04.jpg') }}" alt="...">
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>Road Freight</h3>
                        <div class="service_desc">
                            <p>
                                Our <strong>Road Freight services</strong> offer flexible, dependable, and cost-effective ground transportation across cities, states, and borders. With an extensive fleet and experienced logistics team, we ensure that your goods reach their destination safely and on schedule.
                            </p>
                            <p>
                                Whether you're moving palletized freight, full truckloads (FTL), or less-than-truckload (LTL) shipments, we tailor our services to your cargo size, timeline, and delivery requirements. We offer both domestic and cross-border road freight solutions to support your supply chain.
                            </p>

                            <h3>✅ What We Offer:</h3>
                            <ul>
                                <li>Full Truckload (FTL) and Less-than-Truckload (LTL) services</li>
                                <li>Local, regional, and international road transport</li>
                                <li>Real-time shipment tracking and updates</li>
                                <li>Scheduled pickups and on-time deliveries</li>
                                <li>Transport of general, fragile, and temperature-sensitive goods</li>
                                <li>End-to-end logistics coordination and support</li>
                            </ul>

                            <p>
                                From short-haul deliveries to long-distance freight transport, our road freight services are designed to give your business the reach, control, and reliability it needs on the ground.
                            </p>
                        </div>
                        <span class="read_more" style="display: inline-block;">Read More</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-2-9">
                <div class="card card-style01 border-0 bg-transparent rounded-0">
                    <div class="card-body p-0">
                        <div class="card-image">
                            <img src="{{ asset('front_assets/img/services/service-05.jpg') }}" alt="...">
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>Rail Freight</h3>
                        <div class="service_desc">
                            <p>
                                Our <strong>Rail Freight solutions</strong> provide an efficient, cost-effective, and environmentally friendly way to move bulk cargo across long distances. Ideal for heavy or high-volume shipments, rail transport offers consistent transit times and reduced carbon emissions.
                            </p>
                            <p>
                                We offer comprehensive rail freight services across major trade routes, connecting industrial zones, ports, and inland hubs. From containerized goods to raw materials, we handle every aspect of your rail logistics — from scheduling and tracking to customs clearance and last-mile delivery.
                            </p>

                            <h3>✅ What We Offer:</h3>
                            <ul>
                                <li>Domestic and cross-border rail freight services</li>
                                <li>Full and partial container load (FCL/LCL) options</li>
                                <li>Integration with road and sea freight for multimodal transport</li>
                                <li>Scheduled departures and predictable transit times</li>
                                <li>End-to-end tracking and cargo management</li>
                                <li>Customs clearance and regulatory compliance support</li>
                            </ul>

                            <p>
                                Whether you're moving industrial equipment, bulk commodities, or consumer goods, our rail freight services provide a reliable and sustainable solution to keep your supply chain on track.
                            </p>
                        </div>
                        <span class="read_more" style="display: inline-block;">Read More</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-2-9">
                <div class="card card-style01 border-0 bg-transparent rounded-0">
                    <div class="card-body p-0">
                        <div class="card-image">
                            <img src="{{ asset('front_assets/img/services/custom-packaging-2.jpg') }}" alt="...">
                        </div>
                    </div>
                    <div class="card-content">
                        <h3>Custom Packaging</h3>
                        <div class="service_desc">
                            <p>
                                Our <strong>Custom Packaging solutions</strong> are designed to enhance product presentation, ensure safe transit, and align with your brand identity. From protective materials to fully branded packaging, we offer a wide range of options to suit your product type, volume, and customer experience goals.
                            </p>
                            <p>
                                Whether you're shipping retail goods, fragile items, or high-value products, our packaging experts work with you to create solutions that combine durability, efficiency, and aesthetic appeal — all while optimizing costs and sustainability.
                            </p>

                            <h3>✅ What We Offer:</h3>
                            <ul>
                                <li>Branded boxes, inserts, tape, and labels</li>
                                <li>Eco-friendly and recyclable packaging materials</li>
                                <li>Protective packaging for fragile or sensitive items</li>
                                <li>Custom sizing for small, medium, or oversized goods</li>
                                <li>Kitting, bundling, and unboxing experience enhancements</li>
                                <li>Print and design support for brand consistency</li>
                            </ul>

                            <p>
                                With our custom packaging services, you can deliver a memorable unboxing experience, protect your products in transit, and leave a lasting impression with your customers — from warehouse to doorstep.
                            </p>
                        </div>
                        <span class="read_more" style="display: inline-block;">Read More</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- EXTRA
        ================================================== -->
<section class="bg-img cover-background secondary-overlay" data-overlay-dark="85" data-background="{{ asset('front_assets/img/bg/bg-07.jpg') }}">
    <div class="container">
        <div class="row text-center justify-content-center">
            <div class="col-lg-11 col-xxl-9 wow fadeInUp" data-wow-delay="200ms">
                <h2 class="display-4 font-weight-800 lh-1 mb-1-9 mb-md-5 text-white">Looking for the best logistics transport service?</h2>
                <a href="{{URL::to('/contact')}}" class="butn-style1"><span>Contact Us</span></a>
            </div>
        </div>
    </div>
</section>

@endsection