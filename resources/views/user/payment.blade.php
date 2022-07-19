@extends('userlayout')

@section('content')
    
    <div class="container my-5">

        <div class="row my-4">
            <h4><strong class="text-muted">Enter Infomation & Payment</strong></h4>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4">
                <a href=""><img width="500px" height="300px" style="border:1px solid rgba(0, 0, 0, 0);border-radius:10px" src="https://media.travel.com.vn/tour/tfd_180110052513_804359.jpg" alt=""></a>
            </div>
            <div class="col-sm-8 bg-light">
                    <div class="m-4">
                    <h5><strong>Đà Lạt - Que Garden - Thác Bobla - Khu Du Lịch Kim Ngân Hills - Cà Phê Mê Linh (Tour Giá Sốc)</strong></h5> <br><br>
                    <small>Khởi hành </small> <strong>18/07/2022</strong>  <br><br>
                    <small>Thời gian </small> <strong>4 days</strong>  <br><br>
                    <small>Nơi khởi hành</small> <strong>TP. Hồ Chí Minh</strong> 
                    </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <h5><strong class="text-muted">Communications</strong></h5>

        <div class="row">
            <div class="col-sm-7 bg-light p-3">
                <form>
                    <div class="row p-3">
                      <div class="col-sm-6">
                        Name<input type="name" class="form-control" placeholder="Enter name" name="name">
                      </div>
                      <div class="col-sm-6">
                        Email<input type="email" class="form-control" placeholder="Enter email" name="email">
                      </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-sm-6 mt-3">
                          Phone<input type="tel" class="form-control" placeholder="Enter phone" name="phone">
                        </div>
                        <div class="col-sm-6 mt-3">
                          Address<input type="text" class="form-control" placeholder="Enter address" name="address">
                        </div>
                      </div>

                      <h5><strong class="text-muted">Passenger</strong></h5>
                      <div class="row p-3">
                        <div class="col-sm-6">
                     
                        Adults<input type="number" min="1" value="1" class="form-control" placeholder="Enter Adults" name="person1">
                        </div>
                        <div class="col-sm-6">
                        Children<input type="number" min="0" value="0" class="form-control" placeholder="Enter Children" name="person2">
                        </div>
                      </div>
                      <div class="row p-3">
                          <div class="col-sm-6 mt-3">
                        Young Children<input type="number" min="0" value="0" class="form-control" placeholder="Enter Young Children" name="person3">
                          </div>
                          <div class="col-sm-6 mt-3">
                        Baby<input type="number" min="0" value="0" class="form-control" placeholder="Enter Baby" name="person4">
                          </div>
                        </div>

                      <div class="row my-4">
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio1" name="optradio" value="direct" checked>
                                <label class="form-check-label" for="radio1">Direct Payment</label>
                              </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio2" name="optradio" value="card">
                                <label class="form-check-label" for="radio2">Credit Card Payment</label>
                              </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio3" name="optradio" value="transfer">
                                <label class="form-check-label" for="radio3">Transfer Payments</label>
                              </div>
                        </div>
                      </div>
                   
                        <h5><strong class="text-muted"> If you have any notes, please tell us!</strong></h5>
                      <div class="row m-3">
                        <textarea name="" id="" cols="5" rows="5"></textarea>
                      </div>

                    <div class="row mb-3 mt-5">
                        <div class="col-sm-8"></div>
                        <div class="col-sm-4"><a href=""><button class="btn btn-primary btn-lg"><strong> <small class="text-primary">----</small> BOOK <small class="text-primary">----</small>  </strong></button></a></div>
                        
                    </div>
                </form>
            </div>

            <div class="col-sm-4 ml-3 p-3" style="background-color: aliceblue;border:1px solid rgba(0, 0, 0, 0);border-radius:5px">
                <h4 class="text-danger">Trip summary</h4>
                
                <div class="row mt-5 mb-2">
                    <div class="col-sm-3">
                        <a href=""><img width="100px" style="border:1px solid rgba(0, 0, 0, 0);border-radius:3px" src="https://media.travel.com.vn/tour/tfd_220512092523_383290.jpg" alt=""></a>
                    </div>
                    <div class="col-sm-9">
                        <span style="font-weight: bold">Sapa - Bản Cát Cát - Fansipan - Cổng Trời Ô Quy Hồ - Hạ Long - Đảo Titốp - Yên Tử (Khách sạn 3&4 sao)</span>
                    </div>
                </div>

                <div class="row mt-5 mb-5">
                    <div class="col-sm-5"><span>Passenger</span></div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5"> <strong class="badge bg-danger"><span style="font-size: 15px">1</span></strong> <strong> Passenger </strong></div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-5"><span style="font-size: 20px">Adults</span></div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5"><strong>1 x 199.00$</strong></div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-5"><span style="font-size: 20px">Children</span></div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5"><strong>0 x 99.00$</strong></div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-5"><span style="font-size: 20px">Young</span></div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5"><strong>0 x 59.00$</strong></div>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-5"><span style="font-size: 20px">Baby</span></div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5"><strong>0 x 19.00$</strong></div>
                </div>
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10"><hr></div>
                    <div class="col-sm-1"></div>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-5"><h4><strong>AMOUT</strong></h4></div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5"><h3><strong class="text-danger">398.00$</strong></h3></div>
                </div>

                <div class="row mt-5">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10"><h3 style="text-align: center" class="alert alert-success">BOOKING SUCCSESS!!!</h3></div>
                    <div class="col-sm-1"></div>
                </div>

            </div>
        </div>

    </div>

    

@endsection

@section('title')
    Payment
@endsection

@section('linkcss')
    
@endsection

@section('linkjs')
    
@endsection