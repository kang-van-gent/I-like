@extends('client')
@section('contents')

<style>
    .align-center {
        display: flex;
        align-items: center;
    }
</style>
<!-- Portfolio wide vertical-->
<!-- Modal -->
<section class="section section-lg bg-invisible novi-background" data-preset='{"title":"Portfolio Wide Vertical","category":"thumbnail, gallery, isotope","reload":true,"id":"portfolio-wide-vertical"}'>
    <div class="container-fluid">
        <div class="isotope-wrap isotope-scale-vertical isotope-scale-vertical-wide">
            <div class="isotope-filters">
                <!-- <div class="isotope-filter" data-isotope-filter=".dashboard">แดชบอร์ด<span class="text-danger">(กำลังพัฒนา)</span></div> -->
                <!-- <div class="isotope-filter" data-isotope-filter=".review">การจัดการรีวิวลูกค้า<span class="text-danger">(กำลังพัฒนา)</span></div> -->
                <!-- <div class="isotope-filter" data-isotope-filter=".customers">ข้อมูลลูกค้า<span class="text-danger">(กำลังพัฒนา)</span></div> -->
                <div class="isotope-filter active" data-isotope-filter=".services">จัดการบริการ</div>
                <div class="isotope-filter" data-isotope-filter=".promotions">จัดการโปรโมชั่น</div>
                <!-- <div class="isotope-filter" data-isotope-filter=".orders">ข้อมูลออเดอร์<span class="text-danger">(กำลังพัฒนา)</span></div> -->
                <div class="isotope-filter" data-isotope-filter=".blogs">จัดการบทความ</div>
                <!-- <div class="isotope-filter" data-isotope-filter=".faqs">จัดการคำถามที่พบบ่อย<span class="text-danger">(กำลังพัฒนา)</span></div> -->

            </div>
            <div class="isotope row row-md-40">
                <!-- Dashboard -->
                <div class="col-12 isotope-item dashboard">
                    <div class="row row-30">
                        <div class="col-sm-12 col-lg-12">
                            <!-- Blurb-->
                            <h4 class="table-title">การจัดการแดชบอร์ด <span class="text-danger">(กำลังพัฒนา)</span> </h4>
                            <div class="row row-30 mb-3">
                                <div class="col-sm-6 col-lg-6">
                                    <!-- Offer box light-->
                                    <div class="offer-box offer-box-light">
                                        <h5 class="offer-box-title">กราฟข้อมูล</h5>
                                        <div class="offer-box-divider"></div>
                                        <div class="offer-box-text">We are looking for senior designers who are problem-solvers creating interfaces that elegantly merge form and function.</div>
                                        <ul class="offer-box-list">
                                            <li><span class="offer-box-list-icon novi-icon int-marker"></span><span class="offer-box-list-text">New York</span></li>
                                            <li><span class="offer-box-list-icon novi-icon int-clock"></span><span class="offer-box-list-text">Full Time</span></li>
                                            <li><span class="offer-box-list-icon novi-icon int-calendar"></span><span class="offer-box-list-text">March 12, 2023</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <!-- Offer box light-->
                                    <div class="offer-box offer-box-light">
                                        <h5 class="offer-box-title">กราฟข้อมูล</h5>
                                        <div class="offer-box-divider"></div>
                                        <div class="offer-box-text">Intense is seeking a Senior UI/UX Graphic Designer to join our growing team. This position will have a core focus on developing.</div>
                                        <ul class="offer-box-list">
                                            <li><span class="offer-box-list-icon novi-icon int-marker"></span><span class="offer-box-list-text">New York</span></li>
                                            <li><span class="offer-box-list-icon novi-icon int-clock"></span><span class="offer-box-list-text">Full Time</span></li>
                                            <li><span class="offer-box-list-icon novi-icon int-calendar"></span><span class="offer-box-list-text">March 12, 2023</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <article class="blurb blurb-boxed p-5 mt-0">
                                <div class="row justify-content-between">
                                    <div class="col-6 align-center">
                                        <h4>ข้อมูลหน้าเว็บ</h4>
                                    </div>
                                    <div class="col-6 text-end p-3 ">

                                    </div>
                                </div>
                                <div class="table-responsive ">
                                    <table class="table table-striped table-hover table-modern">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="min-width: 50px; width: 5.5%">
                                                    <div class="icon icon-xs int-sort-up novi-icon"></div>
                                                </th>
                                                <th style="min-width: 280px; width: 25.3%">หน้าเพจ</th>
                                                <th style="min-width: 320px; width: 25.3%">รูปภาพ</th>
                                                <th class="text-center" style="min-width: 70px; width: 18.6%">Account status</th>
                                                <th style="min-width: 300px; " class="text-center">เครื่องมือ</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td class=" text-center">#1</td>
                                                <td><a href="#">Douglas Ross</a></td>
                                                <td>dross@demolink.org</td>
                                                <td class="text-center">
                                                    <div class="int-check novi-icon"></div>
                                                </td>
                                                <td>
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-12 text-center">
                                                            <button type="button" class="btn btn-sm btn-primary mt-0" data-bs-toggle="modal" data-bs-target="#myModal">
                                                                อ่าน
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-warning mt-0" data-bs-toggle="modal" data-bs-target="#myModal">
                                                                แก้ไข
                                                            </button>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>


                                    </table>
                                </div>
                            </article>
                        </div>

                    </div>
                </div>
                @include('master.customers')
                @include('master.review')
                @include('master.services')
                @include('master.promotion')
                @include('master.orders')
                @include('master.blogs')
                @include('master.faqs')


            </div>
        </div>
    </div>

</section>

@include('master.modals.indexmodal')
@include('master.modals.promotionmodal')
@include('master.modals.blogmodal')
@include('master.modals.servicemodal')
@include('master.modals.faqmodal')
@include('master.modals.customermodal')
@include('master.modals.reviewmodal')
@include('master.modals.ordermodal')


<script>
    document.addEventListener('DOMContentLoaded', function() {

        // Filter items to show only those with the class 'dashboard'
        var iso = new Isotope('.isotope', {
            itemSelector: '.isotope-item',
            filter: '.services'
        });

        // Event listeners for filters
        document.querySelectorAll('.isotope-filter').forEach(function(filterButton) {
            filterButton.addEventListener('click', function() {
                var filterValue = filterButton.getAttribute('data-isotope-filter');
                iso.arrange({
                    filter: filterValue
                });
            });
        });

        // Add event listener for remove buttons using event delegation
        const articlesContainer = document.getElementById('articles-container');
        articlesContainer.addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-btn')) {
                const article = event.target.closest('article');
                if (article) {
                    article.remove();
                }
            }
        });

        // Create a new paragraph function
        // function addParagraph() {
        //     let body = document.getElementsByClassName('modal-body')[2];
        //     const articleLenght = document.querySelectorAll('article');
        //     const filteredArtc = Array.from(articleLenght).filter(artc => artc.id.startsWith('artc-'));
        //     let i = articleLenght.length + 1

        //     let article = document.createElement('article'); //Create article and add class
        //     article.classList.add('accent-box', 'p-4', 'mt-4');
        //     article.setAttribute('id', 'artc-' + i);

        //     let boxTopic = document.createElement('p')
        //     boxTopic.classList.add('accent-box-text');
        //     boxTopic.innerText = 'ย่อหน้าที่ ' + i
        //     let imgFrom = document.createElement('div')
        //     imgFrom.classList.add('form-group');
        //     let imgLabel = document.createElement('label')
        //     imgLabel.setAttribute('for', 'input-styles2')
        //     imgLabel.innerText = 'รูปภาพ'
        //     let imgSpan = document.createElement('span')
        //     imgSpan.classList.add('text-danger')
        //     imgSpan.innerText = '*'
        //     let imgDiv = document.createElement('div')
        //     imgDiv.classList.add('position-relative')
        //     let imgInput = document.createElement('input')
        //     imgInput.classList.add('form-control')
        //     imgInput.setAttribute('id', 'input-styles2')
        //     imgInput.setAttribute('type', 'file')

        //     imgLabel.appendChild(imgSpan)
        //     imgDiv.appendChild(imgInput)
        //     imgFrom.appendChild(imgLabel)
        //     imgFrom.appendChild(imgDiv)

        //     let paraForm = document.createElement('div')
        //     paraForm.classList.add('form-group');
        //     let paralabel = document.createElement('label')
        //     paralabel.setAttribute('for', 'input-styles1')
        //     paralabel.innerText = 'ย่อหน้า'
        //     let paraSpan = document.createElement('span')
        //     paraSpan.classList.add('text-danger')
        //     paraSpan.innerText = '*'
        //     let paraDiv = document.createElement('div')
        //     paraDiv.classList.add('position-relative');
        //     let paraInput = document.createElement('textarea')
        //     paraInput.classList.add('form-control', 'form-control-has-validation')
        //     paraInput.setAttribute('id', 'input-question')
        //     paraInput.setAttribute('name', 'question')

        //     let delParaBut = document.createElement('div')
        //     delParaBut.classList.add('d-grid', 'gap-2', 'd-md-flex', 'justify-content-md-end', 'mt-3')
        //     let delBut = document.createElement('button')
        //     delBut.classList.add('btn', 'btn-danger', 'btn-sm', 'remove-btn')
        //     delBut.setAttribute('type', 'button')
        //     delBut.setAttribute('id', 'rm-' + i)
        //     delBut.innerText = 'ลบออก'

        //     delParaBut.appendChild(delBut)

        //     paralabel.appendChild(paraSpan)
        //     paraDiv.appendChild(paraInput)
        //     paraForm.appendChild(paralabel)
        //     paraForm.appendChild(paraDiv)

        //     article.appendChild(boxTopic)
        //     article.appendChild(imgFrom)
        //     article.appendChild(paraForm)

        //     article.appendChild(delParaBut)


        //     body.appendChild(article);
        // }
        // window.addParagraph = addParagraph;


    });

    function addParagraph() {
        const articlesContainer = document.getElementById('articles-container');

        // Clone the first article
        const newArticle = articlesContainer.firstElementChild.cloneNode(true);

        // Update the cloned article's content
        const paragraph = newArticle.querySelector('.accent-box-text');
        const currentNumber = articlesContainer.children.length + 1;
        paragraph.textContent = `ย่อหน้าที่ ${currentNumber}`;

        // Update the names and IDs of the cloned elements
        newArticle.querySelectorAll('input, textarea').forEach((element) => {
            const name = element.getAttribute('name');
            if (name) {
                const newName = name.replace(/\[\d+\]/, `[${currentNumber - 1}]`);
                element.setAttribute('name', newName);
            }
            if (element.id) {
                const newId = element.id.replace(/\d+/, currentNumber);
                element.id = newId;
            }
        });

        // Append the cloned article to the container
        articlesContainer.appendChild(newArticle);
    }
</script>


@endsection

<div id="id-1"></div>
<div id="id-2"></div>
<div id="id-3"></div>
<div id="id-4"></div>
<div id="id-5"></div>
<div id="id-6"></div>