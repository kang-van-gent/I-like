                <!-- Promotions -->
                <div class="col-12 isotope-item promotions ">
                    <div class="row row-30">
                        <div class="col-sm-12 col-lg-12">
                            <!-- Blurb-->
                            <article class="blurb blurb-boxed p-5 mt-0">
                                <div class="row justify-content-between">
                                    <div class="col-6 align-center">
                                        <h4>จัดการโปรโมชั่น</h4>
                                    </div>
                                    <div class="col-6 text-end p-3 ">
                                        <button type="button" class="btn btn-sm btn-primary " data-bs-toggle="modal" data-bs-target="#promotionModal">
                                            เพิ่ม
                                        </button>
                                    </div>
                                </div>
                                <div class="table-responsive ">
                                    <table class="table table-striped table-hover table-modern">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="min-width: 50px; width: 5.5%">
                                                    <div class="icon icon-xs int-sort-up novi-icon"></div>
                                                </th>
                                                <th style="min-width: 280px; width: 25.3%">ชื่อโปรโมชั่น</th>
                                                <th style="min-width: 320px; width: 25.3%">ราคา</th>
                                                <th class="text-center" style="min-width: 70px; width: 18.6%">สถานะ</th>
                                                <th style="min-width: 300px; " class="text-center">เครื่องมือ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($promotions)
                                            @foreach ($promotions as $index => $promotion)
                                            <tr>
                                                <td class=" text-center">#{{$index +1}}</td>
                                                <td><a href="#">{{$promotion->details}}</a></td>
                                                <td>{{$promotion->price}}</td>
                                                <td class="text-center">
                                                    @if($promotion->isPublish)เผยแพร่
                                                    @else ไม่เผยแพร่
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-12 text-center">
                                                            <!-- <button type="button" class="btn btn-sm btn-primary mt-0" data-bs-toggle="modal" data-bs-target="#promotionModal">
                                                                อ่าน
                                                            </button> -->
                                                            <!-- <button type="button" class="btn btn-sm btn-warning mt-0" data-bs-toggle="modal" data-bs-target="#serviceModal">
                                                                แก้ไข -->
                                                            </button>
                                                            <a class="btn btn-sm btn-danger mt-0" onclick="return confirm('ยืนยันที่จะลบข้อมูล')" href="{{url('/admin/delete-promotion/'.$promotion->id)}}">
                                                                ลบ
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </article>
                        </div>

                    </div>
                </div>