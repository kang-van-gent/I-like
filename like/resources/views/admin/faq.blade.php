@extends('admin')
@section('contents')


<div class="container-fluid">
  <div class="col-lg-10 m-auto">
    <h2 class="text-center">คำถามที่พบบ่อย</h2>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item card">
        <h2 class="accordion-header card-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Expandable Card #1
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body card-body">
            <p>This is the first item's card body. You can place any content here, such as text, images, or other Bootstrap components.</p>
          </div>
        </div>
      </div>
      <div class="accordion-item card">
        <h2 class="accordion-header card-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Expandable Card #2
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body card-body">
            <p>This is the second item's card body. You can place any content here, such as text, images, or other Bootstrap components.</p>
          </div>
        </div>
      </div>
      <div class="accordion-item card">
        <h2 class="accordion-header card-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Expandable Card #3
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body card-body">
            <p>This is the third item's card body. You can place any content here, such as text, images, or other Bootstrap components.</p>
          </div>
        </div>
      </div>
    </div>




  </div>
</div>


@endsection