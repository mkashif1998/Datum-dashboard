<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                   <div class="d-flex align-items-center justify-content-between">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><router-link :to="{name: 'layout.order'}">Orders</router-link></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Order</li>
                            </ol>
                        </nav>
                    </div>                                   
                </div>
            </div>
            <div class="col-lg-12 mb-3 d-flex justify-content-between">
                    <h4 class="font-weight-bold d-flex align-items-center">New Order</h4>
                    <router-link :to="{name: 'layout.order'}" class="btn btn-primary btn-sm d-flex align-items-center justify-content-between ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                        </svg>
                        <span class="ml-2">Back</span>
                    </router-link>
            </div>            
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="font-weight-bold pb-3">Customer Details</h5>
                        <form class="row g-3">
                            <div class="col-md-12 mb-3">
                                <label for="Text1" class="form-label font-weight-bold text-muted text-uppercase">Customer</label>
                                <input type="text" class="form-control" id="Text1" placeholder="Search Customer">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="Text2" class="form-label font-weight-bold text-muted text-uppercase">Phone</label>
                                <input type="text" class="form-control" id="Text2" placeholder="Enter Phone">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="Text3" class="form-label font-weight-bold text-muted text-uppercase">Email</label>
                                <input type="text" class="form-control" id="Text3" placeholder="Enter Email">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="Text4" class="form-label font-weight-bold text-muted text-uppercase">Address</label>
                                <input type="text" class="form-control" id="Text4" placeholder="Enter Address">
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="font-weight-bold pb-3">Order Details</h5>
                        <form class="row g-3">
                            <div class="col-md-6 mb-3">
                                <label for="Text5" class="form-label font-weight-bold text-muted text-uppercase">Date</label>
                                <input type="text" class="form-control vanila-datepicker datepicker-input" id="Text5" placeholder="DD MM YYYY">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="Text6" class="form-label font-weight-bold text-muted text-uppercase">Time</label>
                                <input type="text" class="form-control" id="Text6" placeholder="00:00">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="Text7" class="form-label font-weight-bold text-muted text-uppercase">Payment Method</label><br>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    <button type="button" class="btn btn-outline-primary active">Credit Card</button>
                                    <button type="button" class="btn btn-outline-primary">PayPal</button>
                                    <button type="button" class="btn btn-outline-primary">Apple Pay</button>
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="Text8" class="form-label font-weight-bold text-muted text-uppercase">Comment</label>
                                <textarea type="text" class="form-control" id="Text8" rows="2.5" placeholder="Enter your comment"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body p-0">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item p-3">
                        <h5 class="font-weight-bold mb-3">Order Items</h5>
                        <div class="modal-product-search d-flex">
                                <form class="mr-3 position-relative">
                                    <div class="form-group mb-0">
                                    <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" placeholder="Search Product">
                                    <a class="search-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </a>
                                    </div>
                                </form>	 
                            </div>
                    </li>
                    <li class="list-group-item p-0">
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr class="text-muted">
                                    <th scope="col">Product</th>
                                    <th scope="col" class="text-center">Quantity</th>
                                    <th scope="col" class="text-center">Price</th>
                                    <th scope="col" class="text-center"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(order,index) in orders" :key="index">
                                        <td>
                                            <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                <div class="h-avatar is-medium">
                                                    <img class="avatar avatar-60 rounded" :src="order.img">
                                                </div>
                                                <div class="data-content">
                                                    <div>
                                                    <span class="font-weight-bold">{{order.title}}</span>                           
                                                    </div>
                                                    <p class="m-0 mt-1">
                                                        {{order.desc}}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                                {{order.quantity}} 
                                                <svg xmlns="http://www.w3.org/2000/svg" class="ml-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                </svg>
                                            </div>                                            
                                        </td>
                                        <td class="text-center">
                                           {{order.price}}
                                        </td>
                                        <td class="text-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> 
                    </li>
                    <li class="list-group-item p-3">
                        <div class="d-flex justify-content-end align-items-center">
                            Total: <p class="ml-2 mb-0 font-weight-bold">$2,474.97</p>
                            <button class="btn btn-primary ml-5 btn-sm">Create Order</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: 'OrderNew',
    data() {
        return{
            orders: [
                {
                    img: require('@/assets/images/products/12.jpg'),
                    title: 'FivePlus Nord 5G',
                    desc: '(12GB RAM, 256GB Storage)',
                    quantity: '1',
                    price: '$2,399.99'
                },
                {
                    img: require('@/assets/images/products/1.jpg'),
                    title: 'Bassheads 220 Wired Headset',
                    desc: 'Molten Orange, In the Ear',
                    quantity: '1',
                    price: '$74.98'
                }
            ]
        }
    }

}
</script>
