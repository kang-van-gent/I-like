                <!-- Blogs -->
                <div class="col-12 isotope-item blogs">
                    <div class="row row-30">
                        <div class="col-sm-12 col-lg-12">
                            <!-- Blurb-->
                            <article class="blurb blurb-boxed p-5 mt-0">
                                <div class="row justify-content-between">
                                    <div class="col-6 align-center">
                                        <h4>จัดการบทความ</h4>
                                    </div>
                                    <div class="col-6 text-end p-3 ">
                                        <button type="button" class="btn btn-sm btn-primary " data-bs-toggle="modal" data-bs-target="#blogModal">
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
                                                <th style="min-width: 280px; width: 25.3%">หัวข้อ</th>
                                                <th style="min-width: 320px; width: 25.3%">รายละเอียด</th>
                                                <th class="text-center" style="min-width: 140px; width: 18.6%">หมวดหมู่</th>
                                                <th style="min-width: 300px; " class="text-center">เครื่องมือ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($blogs)
                                            @foreach ($blogs as $index => $blog)
                                            <tr>
                                                <td class=" text-center">#{{$index+1}}</td>
                                                <td><a href="#">{{$blog->topic}}</a></td>
                                                <td>{{$blog->details}}</td>
                                                <td class="text-center">
                                                    {{$blog->category}}
                                                </td>
                                                <td>
                                                    <div class="row justify-content-center">
                                                        <div class="col-md-12 text-center">
                                                            <!-- <button type="button" class="btn btn-sm btn-primary mt-0" data-bs-toggle="modal" data-bs-target="#blogModal">
                                                                อ่าน
                                                            </button>
                                                            <button type="button" class="btn btn-sm btn-warning mt-0" data-bs-toggle="modal" data-bs-target="#blogModal">
                                                                แก้ไข
                                                            </button> -->
                                                            <a class="btn btn-sm btn-danger mt-0" onclick="return confirm('ยืนยันที่จะลบข้อมูล')" href="{{url('/admin/delete-blog/'.$blog->id)}}">
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