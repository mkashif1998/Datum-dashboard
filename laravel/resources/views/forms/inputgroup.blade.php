<x-app-layout>
<div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 col-lg-12 col-md-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Default</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#input-group-1" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="input-group-1">
                           <div class="card"><kbd class="bg-dark"><pre id="default" class="text-white"><code>
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon1&#x22;&#x3E;@&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Username&#x22; aria-label=&#x22;Username&#x22;
      aria-describedby=&#x22;basic-addon1&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Recipient&#x27;s username&#x22;
      aria-label=&#x22;Recipient&#x27;s username&#x22; aria-describedby=&#x22;basic-addon2&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon2&#x22;&#x3E;@example.com&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;label for=&#x22;basic-url&#x22;&#x3E;Your URL&#x3C;/label&#x3E;
&#x3C;div class=&#x22;input-group mb-3&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon3&#x22;&#x3E;https://example.com/users/&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; id=&#x22;basic-url&#x22; aria-describedby=&#x22;basic-addon3&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22;&#x3E;$&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Amount (to the nearest dollar)&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22;&#x3E;.00&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text text-area&#x22;&#x3E;With textarea&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;textarea class=&#x22;form-control&#x22; aria-label=&#x22;With textarea&#x22;&#x3E;&#x3C;/textarea&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                           aria-describedby="basic-addon1">
                     </div>
                     <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                           <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                     </div>
                     <label for="basic-url">Your URL</label>
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                     </div>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                           <span class="input-group-text">.00</span>
                        </div>
                     </div>
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text text-area">With textarea</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Simple Icon</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#input-group-2" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="input-group-2">
                           <div class="card"><kbd class="bg-dark"><pre id="simple-icons" class="text-white"><code>
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon4&#x22;&#x3E;&#x3C;i class=&#x22;las la-bell font-size-20&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Notification&#x22; aria-label=&#x22;notification&#x22;
      aria-describedby=&#x22;basic-addon4&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;p class=&#x22;text-right&#x22;&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-right mr-1&#x22;&#x3E;&#x3C;/i&#x3E;Right&#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Notification&#x22; aria-label=&#x22;notification&#x22;
      aria-describedby=&#x22;basic-addon5&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon5&#x22;&#x3E;&#x3C;i class=&#x22;las la-bell font-size-20&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon4"><i class="las la-bell font-size-20"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Notification" aria-label="notification"
                           aria-describedby="basic-addon4">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Notification" aria-label="notification"
                           aria-describedby="basic-addon5">
                        <div class="input-group-append">
                           <span class="input-group-text" id="basic-addon5"><i class="las la-bell font-size-20"></i></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Spinning Icon</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#input-group-3" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="input-group-3">
                           <div class="card"><kbd class="bg-dark"><pre id="spinning-icon" class="text-white"><code>
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon6&#x22;&#x3E;&#x3C;i class=&#x22;fa fa-spinner fa-spin&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Spinners&#x22; aria-label=&#x22;spinners&#x22;
      aria-describedby=&#x22;basic-addon6&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Spinners&#x22; aria-label=&#x22;spinners&#x22;
      aria-describedby=&#x22;basic-addon7&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon7&#x22;&#x3E;&#x3C;i class=&#x22;fa fa-spinner fa-spin&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon6"><i class="fa fa-spinner fa-spin"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Spinners" aria-label="spinners"
                           aria-describedby="basic-addon6">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Spinners" aria-label="spinners"
                           aria-describedby="basic-addon7">
                        <div class="input-group-append">
                           <span class="input-group-text" id="basic-addon7"><i class="fa fa-spinner fa-spin"></i></span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Switch</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#input-group-4" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="input-group-4">
                           <div class="card"><kbd class="bg-dark"><pre id="switch" class="text-white"><code>
&#x3C;p&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-left mr-1&#x22;&#x3E;&#x3C;/i&#x3E; Left &#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon6&#x22;&#x3E;&#x3C;i class=&#x22;fa fa-spinner fa-spin&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Spinners&#x22; aria-label=&#x22;spinners&#x22;
      aria-describedby=&#x22;basic-addon6&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;p class=&#x22;text-right&#x22;&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-right mr-1&#x22;&#x3E;&#x3C;/i&#x3E;Right&#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Spinners&#x22; aria-label=&#x22;spinners&#x22;
      aria-describedby=&#x22;basic-addon7&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;basic-addon7&#x22;&#x3E;&#x3C;i class=&#x22;fa fa-spinner fa-spin&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <div class="input-group-text">
                              <div class="custom-control custom-switch custom-switch-color">
                                 <input type="checkbox" class="custom-control-input bg-primary" id="customSwitch01"
                                    checked="">
                                 <label class="custom-control-label" for="customSwitch01"></label>
                              </div>
                           </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Switch" aria-label="switch">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Switch" aria-label="switch">
                        <div class="input-group-append">
                           <div class="input-group-text">
                              <div class="custom-control custom-switch custom-switch-color">
                                 <input type="checkbox" class="custom-control-input bg-success" id="customSwitch02"
                                    checked="">
                                 <label class="custom-control-label" for="customSwitch02"></label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Buttons with dropdowns</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#input-group-5" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="input-group-5">
                           <div class="card"><kbd class="bg-dark"><pre id="buttons-with-dropdown" class="text-white"><code>
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;button class=&#x22;btn btn-primary dropdown-toggle&#x22; type=&#x22;button&#x22; data-toggle=&#x22;dropdown&#x22;
         aria-haspopup=&#x22;true&#x22; aria-expanded=&#x22;false&#x22;&#x3E;Dropdown &#x3C;/button&#x3E;
      &#x3C;div class=&#x22;dropdown-menu&#x22;&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Action&#x3C;/a&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Another action&#x3C;/a&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Something else here&#x3C;/a&#x3E;
         &#x3C;div role=&#x22;separator&#x22; class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/div&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Separated link&#x3C;/a&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Text input with dropdown button&#x22;&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">Dropdown </button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);">Action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                           </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <div class="input-group-append">
                           <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">Dropdown </button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);">Action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Segmented buttons</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#input-group-6" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="input-group-6">
                           <div class="card"><kbd class="bg-dark"><pre id="segmented-buttons" class="text-white"><code>
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Action&#x3C;/button&#x3E;
      &#x3C;button type=&#x22;button&#x22; class=&#x22;btn btn-outline-primary dropone dropdown-toggle dropdown-toggle-split&#x22;
         data-toggle=&#x22;dropdown&#x22; aria-haspopup=&#x22;true&#x22; aria-expanded=&#x22;false&#x22;&#x3E;
         &#x3C;i class=&#x22;las la-angle-down&#x22;&#x3E;&#x3C;/i&#x3E;
      &#x3C;/button&#x3E;
      &#x3C;div class=&#x22;dropdown-menu&#x22;&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Action&#x3C;/a&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Another action&#x3C;/a&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Something else here&#x3C;/a&#x3E;
         &#x3C;div role=&#x22;separator&#x22; class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/div&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Separated link&#x3C;/a&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Text input with segmented dropdown button&#x22;&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button type="button" class="btn btn-primary">Action</button>
                           <button type="button" class="btn btn-outline-primary dropone dropdown-toggle dropdown-toggle-split"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="las la-angle-down"></i>
                           </button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);">Action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                           </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                        <div class="input-group-append">
                           <button type="button" class="btn btn-outline-secondary">Action</button>
                           <button type="button" class="btn btn-secondary dropone dropdown-toggle  dropdown-toggle-split"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="las la-angle-down"></i>
                           </button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);">Action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Custom select</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#input-group-7" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="input-group-7">
                           <div class="card"><kbd class="bg-dark"><pre id="custom-select" class="text-white"><code>
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;label class=&#x22;input-group-text&#x22; for=&#x22;inputGroupSelect01&#x22;&#x3E;Options&#x3C;/label&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;select class=&#x22;custom-select&#x22; id=&#x22;inputGroupSelect01&#x22;&#x3E;
      &#x3C;option selected&#x3E;Choose...&#x3C;/option&#x3E;
      &#x3C;option value=&#x22;1&#x22;&#x3E;One&#x3C;/option&#x3E;
      &#x3C;option value=&#x22;2&#x22;&#x3E;Two&#x3C;/option&#x3E;
      &#x3C;option value=&#x22;3&#x22;&#x3E;Three&#x3C;/option&#x3E;
   &#x3C;/select&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group mb-4">
                        <select class="custom-select" id="inputGroupSelect02">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                           <label class="input-group-text" for="inputGroupSelect02">Options</label>
                        </div>
                     </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                        <select class="custom-select" id="inputGroupSelect03">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect04">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                     </div>
                  </div>
               </div>
            
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Sizing</h4>
                     </div>
                 <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#input-group-8" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="input-group-8">
                           <div class="card"><kbd class="bg-dark"><pre id="sizing" class="text-white"><code>
&#x3C;div class=&#x22;input-group input-group-sm mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;inputGroup-sizing-sm&#x22;&#x3E;Small&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Small&#x22; aria-describedby=&#x22;inputGroup-sizing-sm&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;inputGroup-sizing-default&#x22;&#x3E;Default&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Default&#x22;
      aria-describedby=&#x22;inputGroup-sizing-default&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;input-group input-group-lg&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;inputGroup-sizing-lg&#x22;&#x3E;Large&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Large&#x22; aria-describedby=&#x22;inputGroup-sizing-sm&#x22;&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="input-group input-group-sm mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                     </div>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default"
                           aria-describedby="inputGroup-sizing-default">
                     </div>
                     <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Dropdown Icon</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#input-group-9" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="input-group-9">
                           <div class="card"><kbd class="bg-dark"><pre id="dropdown-icon" class="text-white"><code>
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
      
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;button class=&#x22;btn btn-primary  dropone dropdown-toggle&#x22; type=&#x22;button&#x22; data-toggle=&#x22;dropdown&#x22;
         aria-haspopup=&#x22;true&#x22; aria-expanded=&#x22;false&#x22;&#x3E;&#x3C;i class=&#x22;las la-cog font-size-20&#x22;&#x3E;&#x3C;/i&#x3E;&#x3C;/button&#x3E;
      &#x3C;div class=&#x22;dropdown-menu&#x22;&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Action&#x3C;/a&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Another action&#x3C;/a&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Something else here&#x3C;/a&#x3E;
         &#x3C;div role=&#x22;separator&#x22; class=&#x22;dropdown-divider&#x22;&#x3E;&#x3C;/div&#x3E;
         &#x3C;a class=&#x22;dropdown-item&#x22; href=&#x22;javascript:void(0);&#x22;&#x3E;Separated link&#x3C;/a&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Dropdown&#x22; aria-label=&#x22;dropdown&#x22;&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
      
                        <div class="input-group-prepend">
                           <button class="btn btn-primary  dropone dropdown-toggle" type="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false"><i class="las la-cog font-size-20"></i></button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="javascript:void(0);">Action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Another action</a>
                              <a class="dropdown-item" href="javascript:void(0);">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="javascript:void(0);">Separated link</a>
                           </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Dropdown" aria-label="dropdown">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1 "></i>Right </p>
                     <div class="input-group">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <div class="input-group-append">
                           <button class="btn btn-success dropone dropdown-toggle" type="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false"><i class="las la-cog font-size-20"></i></button>
                           <div class="dropdown-menu">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                              <div role="separator" class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Separated link</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Checkboxes</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#input-group-10" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="input-group-10">
                           <div class="card"><kbd class="bg-dark"><pre id="checkbox" class="text-white"><code>
&#x3C;p&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-left mr-1&#x22;&#x3E;&#x3C;/i&#x3E; Left &#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;div class=&#x22;input-group-text&#x22;&#x3E;
         &#x3C;input type=&#x22;checkbox&#x22; aria-label=&#x22;Text input with checkbox&#x22;&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Checkbox&#x22; aria-label=&#x22;checkbox&#x22;
      aria-describedby=&#x22;basic-addon1&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;p class=&#x22;text-right&#x22;&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-right mr-1&#x22;&#x3E;&#x3C;/i&#x3E;Right&#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Checkbox&#x22; aria-label=&#x22;checkbox&#x22;
      aria-describedby=&#x22;basic-addon5&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;div class=&#x22;input-group-text&#x22;&#x3E;
         &#x3C;input type=&#x22;checkbox&#x22; aria-label=&#x22;Text input with checkbox&#x22; checked&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <div class="input-group-text">
                              <input type="checkbox" aria-label="Text input with checkbox">
                           </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Checkbox" aria-label="checkbox"
                           aria-describedby="basic-addon1">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Checkbox" aria-label="checkbox"
                           aria-describedby="basic-addon5">
                        <div class="input-group-append">
                           <div class="input-group-text">
                              <input type="checkbox" aria-label="Text input with checkbox" checked>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Radios</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#input-group-11" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="input-group-11">
                           <div class="card"><kbd class="bg-dark"><pre id="radios" class="text-white"><code>
&#x3C;p&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-left mr-1&#x22;&#x3E;&#x3C;/i&#x3E; Left &#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;div class=&#x22;input-group-text&#x22;&#x3E;
         &#x3C;input type=&#x22;radio&#x22; name=&#x22;custom-radio-1&#x22; checked&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Checkbox&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;p class=&#x22;text-right&#x22;&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-right mr-1&#x22;&#x3E;&#x3C;/i&#x3E;Right&#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Checkbox&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;div class=&#x22;input-group-text&#x22;&#x3E;
         &#x3C;input type=&#x22;radio&#x22; name=&#x22;custom-radio-1&#x22; checked&#x3E;
      &#x3C;/div&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <div class="input-group-text">
                              <input type="radio" name="custom-radio-1" checked>
                           </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Checkbox">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Checkbox">
                        <div class="input-group-append">
                           <div class="input-group-text">
                              <input type="radio" name="custom-radio-1" checked>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Multiple inputs</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#input-group-12" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="input-group-12">
                           <div class="card"><kbd class="bg-dark"><pre id="multiple-inputs" class="text-white"><code>
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group&#x22;&#x3E;
      &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
         &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;first&#x22;&#x3E;First and last name&#x3C;/span&#x3E;
      &#x3C;/div&#x3E;
      &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22;&#x3E;
      &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22;&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="input-group">
                        <div class="input-group">
                           <div class="input-group-prepend">
                              <span class="input-group-text" id="first">First and last name</span>
                           </div>
                           <input type="text" class="form-control">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Multiple addons</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#input-group-13" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="input-group-13">
                           <div class="card"><kbd class="bg-dark"><pre id="multiple-addons" class="text-white"><code>
&#x3C;p&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-left mr-1&#x22;&#x3E;&#x3C;/i&#x3E; Left &#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22;&#x3E;$&#x3C;/span&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22;&#x3E;0.00&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Amount (to the nearest dollar)&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;p class=&#x22;text-right&#x22;&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-right mr-1&#x22;&#x3E;&#x3C;/i&#x3E;Right&#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; aria-label=&#x22;Amount (to the nearest dollar)&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22;&#x3E;$&#x3C;/span&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22;&#x3E;0.00&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text">$</span>
                           <span class="input-group-text">0.00</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                           <span class="input-group-text">$</span>
                           <span class="input-group-text">0.00</span>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Custom select</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#input-group-14" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="input-group-14">
                           <div class="card"><kbd class="bg-dark"><pre id="custom-select" class="text-white"><code>
&#x3C;p&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-left mr-1&#x22;&#x3E;&#x3C;/i&#x3E; Left &#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;button class=&#x22;btn btn-primary&#x22; type=&#x22;button&#x22;&#x3E;Button&#x3C;/button&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;&#x22; aria-label=&#x22;&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;p class=&#x22;text-right&#x22;&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-right mr-1&#x22;&#x3E;&#x3C;/i&#x3E;Right&#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Recipient&#x27;s username&#x22;
      aria-label=&#x22;Recipient&#x27;s username&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;button class=&#x22;btn btn-primary&#x22; type=&#x22;button&#x22;&#x3E;Button&#x3C;/button&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;p&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-left mr-1&#x22;&#x3E;&#x3C;/i&#x3E; Left &#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;button class=&#x22;btn btn-outline-primary&#x22; type=&#x22;button&#x22;&#x3E;Button&#x3C;/button&#x3E;
      &#x3C;button class=&#x22;btn btn-outline-primary&#x22; type=&#x22;button&#x22;&#x3E;Button&#x3C;/button&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;&#x22; aria-label=&#x22;&#x22;&#x3E;
&#x3C;/div&#x3E;
&#x3C;p class=&#x22;text-right&#x22;&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-right mr-1&#x22;&#x3E;&#x3C;/i&#x3E;Right&#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; placeholder=&#x22;Recipient&#x27;s username&#x22;
      aria-label=&#x22;Recipient&#x27;s username&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;button class=&#x22;btn btn-outline-primary&#x22; type=&#x22;button&#x22;&#x3E;Button&#x3C;/button&#x3E;
      &#x3C;button class=&#x22;btn btn-outline-primary&#x22; type=&#x22;button&#x22;&#x3E;Button&#x3C;/button&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button class="btn btn-primary" type="button">Button</button>
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username">
                        <div class="input-group-append">
                           <button class="btn btn-primary" type="button">Button</button>
                        </div>
                     </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button class="btn btn-outline-primary" type="button">Button</button>
                           <button class="btn btn-outline-primary" type="button">Button</button>
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="">
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username">
                        <div class="input-group-append">
                           <button class="btn btn-outline-primary" type="button">Button</button>
                           <button class="btn btn-outline-primary" type="button">Button</button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Custom file input</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#input-group-15" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="input-group-15">
                           <div class="card"><kbd class="bg-dark"><pre id="custom-file-input" class="text-white"><code>
&#x3C;p&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-left mr-1&#x22;&#x3E;&#x3C;/i&#x3E; Left &#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22;&#x3E;Upload&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;custom-file&#x22;&#x3E;
      &#x3C;input type=&#x22;file&#x22; class=&#x22;custom-file-input&#x22; id=&#x22;inputGroupFile01&#x22;&#x3E;
      &#x3C;label class=&#x22;custom-file-label&#x22; for=&#x22;inputGroupFile01&#x22;&#x3E;Choose file&#x3C;/label&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;p class=&#x22;text-right&#x22;&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-right mr-1&#x22;&#x3E;&#x3C;/i&#x3E;Right&#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;custom-file&#x22;&#x3E;
      &#x3C;input type=&#x22;file&#x22; class=&#x22;custom-file-input&#x22; id=&#x22;inputGroupFile02&#x22;&#x3E;
      &#x3C;label class=&#x22;custom-file-label&#x22; for=&#x22;inputGroupFile02&#x22;&#x3E;Choose file&#x3C;/label&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;span class=&#x22;input-group-text&#x22; id=&#x22;upload&#x22;&#x3E;Upload&#x3C;/span&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;p&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-left mr-1&#x22;&#x3E;&#x3C;/i&#x3E; Left &#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group mb-4&#x22;&#x3E;
   &#x3C;div class=&#x22;input-group-prepend&#x22;&#x3E;
      &#x3C;button class=&#x22;btn btn-outline-secondary&#x22; type=&#x22;button&#x22;&#x3E;Button&#x3C;/button&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;custom-file&#x22;&#x3E;
      &#x3C;input type=&#x22;file&#x22; class=&#x22;custom-file-input&#x22; id=&#x22;inputGroupFile03&#x22;&#x3E;
      &#x3C;label class=&#x22;custom-file-label&#x22; for=&#x22;inputGroupFile03&#x22;&#x3E;Choose file&#x3C;/label&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
&#x3C;p class=&#x22;text-right&#x22;&#x3E;&#x3C;i class=&#x22;las la-long-arrow-alt-right mr-1&#x22;&#x3E;&#x3C;/i&#x3E;Right&#x3C;/p&#x3E;
&#x3C;div class=&#x22;input-group&#x22;&#x3E;
   &#x3C;div class=&#x22;custom-file&#x22;&#x3E;
      &#x3C;input type=&#x22;file&#x22; class=&#x22;custom-file-input&#x22; id=&#x22;inputGroupFile04&#x22;&#x3E;
      &#x3C;label class=&#x22;custom-file-label&#x22; for=&#x22;inputGroupFile04&#x22;&#x3E;Choose file&#x3C;/label&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;input-group-append&#x22;&#x3E;
      &#x3C;button class=&#x22;btn btn-outline-secondary&#x22; type=&#x22;button&#x22;&#x3E;Button&#x3C;/button&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="inputGroupFile01">
                           <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group mb-4">
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="inputGroupFile02">
                           <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                        </div>
                        <div class="input-group-append">
                           <span class="input-group-text" id="upload">Upload</span>
                        </div>
                     </div>
                     <p><i class="las la-long-arrow-alt-left mr-1"></i> Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="inputGroupFile03">
                           <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                        </div>
                     </div>
                     <p class="text-right"><i class="las la-long-arrow-alt-right mr-1"></i>Right</p>
                     <div class="input-group">
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="inputGroupFile04">
                           <label class="custom-file-label" for="inputGroupFile04">Choose file</label>
                        </div>
                        <div class="input-group-append">
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</x-app-layout>
