<x-app-layout>
<div class="container-fluid">
         <div class="row">
               <div class="col-sm-12 col-lg-12">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Basic Checkbox</h4>
                        </div>
                     <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-checkbox-1" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-checkbox-1">
                           <div class="card"><kbd class="bg-dark"><pre id="Basic-checkbox" class="text-white"><code>
&#x3C;div class=&#x22;checkbox d-inline-block mr-3&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;checkbox-input&#x22; id=&#x22;checkbox1&#x22;&#x3E;
   &#x3C;label for=&#x22;checkbox1&#x22;&#x3E;Primary-Inactive&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;checkbox d-inline-block mr-3&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;checkbox-input&#x22; id=&#x22;checkbox2&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label for=&#x22;checkbox2&#x22;&#x3E;Primary / Active&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;checkbox d-inline-block mr-3&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;checkbox-input&#x22; id=&#x22;checkbox3&#x22; disabled=&#x22;&#x22;&#x3E;
   &#x3C;label for=&#x22;checkbox3&#x22;&#x3E;Disable / Inactive&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;checkbox d-inline-block mr-3&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;checkbox-input&#x22; id=&#x22;checkbox4&#x22; checked=&#x22;&#x22; disabled=&#x22;&#x22;&#x3E;
   &#x3C;label for=&#x22;checkbox4&#x22;&#x3E;Active / Disable&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                          <div class="checkbox d-inline-block mr-3">
                              <input type="checkbox" class="checkbox-input" id="checkbox1">
                              <label for="checkbox1">Primary-Inactive</label>
                           </div>
                           <div class="checkbox d-inline-block mr-3">
                              <input type="checkbox" class="checkbox-input" id="checkbox2" checked="">
                              <label for="checkbox2">Primary / Active</label>
                           </div>
                           <div class="checkbox d-inline-block mr-3">
                              <input type="checkbox" class="checkbox-input" id="checkbox3" disabled="">
                              <label for="checkbox3">Disable / Inactive</label>
                           </div>
                           <div class="checkbox d-inline-block mr-3">
                              <input type="checkbox" class="checkbox-input" id="checkbox4" checked="" disabled="">
                              <label for="checkbox4">Active / Disable</label>
                           </div>
                     </div>
                  </div>

                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Custom Checkbox</h4>
                        </div>
                     <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-checkbox-2" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-checkbox-2">
                           <div class="card"><kbd class="bg-dark"><pre id="custom-checkbox" class="text-white"><code>
&#x3C;div class=&#x22;custom-control custom-checkbox custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input&#x22; id=&#x22;customCheck5&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck5&#x22;&#x3E;Primary / Inactive&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input&#x22; id=&#x22;customCheck6&#x22; Checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck6&#x22;&#x3E;Primary - active&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input&#x22; id=&#x22;customCheck7&#x22;  disabled=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck7&#x22;&#x3E;Primary - inactive - disabled&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input&#x22; id=&#x22;customCheck8&#x22;  checked=&#x22;&#x22; disabled=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck8&#x22;&#x3E;Primary - active - disabled&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                       <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck5">
                           <label class="custom-control-label" for="customCheck5">Primary / Inactive</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck6" Checked="">
                           <label class="custom-control-label" for="customCheck6">Primary - active</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck7"  disabled="">
                           <label class="custom-control-label" for="customCheck7">Primary - inactive - disabled</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck8"  checked="" disabled="">
                           <label class="custom-control-label" for="customCheck8">Primary - active - disabled</label>
                        </div>
                     </div>
                  </div>                    
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Color</h4>
                        </div>
                     <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-checkbox-3" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-checkbox-3">
                           <div class="card"><kbd class="bg-dark"><pre id="checkbox-color" class="text-white"><code>
&#x3C;div class=&#x22;custom-control custom-checkbox custom-checkbox-color-check custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input bg-primary&#x22; id=&#x22;customCheck-1&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-1&#x22;&#x3E; Primary&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox custom-checkbox-color-check custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input bg-success&#x22; id=&#x22;customCheck-2&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-2&#x22;&#x3E;Success&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox custom-checkbox-color-check custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input bg-danger&#x22; id=&#x22;customCheck-3&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-3&#x22;&#x3E;Danger&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox custom-checkbox-color-check custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input bg-warning&#x22; id=&#x22;customCheck-4&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-4&#x22;&#x3E;Warning&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox custom-checkbox-color-check custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input bg-dark&#x22; id=&#x22;customCheck-5&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-5&#x22;&#x3E;Dark&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox custom-checkbox-color-check custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input bg-info&#x22; id=&#x22;customCheck-6&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-6&#x22;&#x3E;Info&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-1" checked="">
                           <label class="custom-control-label" for="customCheck-1"> Primary</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-success" id="customCheck-2" checked="">
                           <label class="custom-control-label" for="customCheck-2">Success</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-danger" id="customCheck-3" checked="">
                           <label class="custom-control-label" for="customCheck-3">Danger</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-warning" id="customCheck-4" checked="">
                           <label class="custom-control-label" for="customCheck-4">Warning</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-dark" id="customCheck-5" checked="">
                           <label class="custom-control-label" for="customCheck-5">Dark</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-info" id="customCheck-6" checked="">
                           <label class="custom-control-label" for="customCheck-6">Info</label>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Custom Color</h4>
                        </div>
                    <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-checkbox-4" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-checkbox-4">
                           <div class="card"><kbd class="bg-dark"><pre id="custom-color" class="text-white"><code>
&#x3C;div class=&#x22;custom-control custom-checkbox custom-checkbox-color custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input bg-primary&#x22; id=&#x22;customCheck-11&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-11&#x22;&#x3E;Primary &#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox custom-checkbox-color custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input bg-success&#x22; id=&#x22;customCheck-22&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-22&#x22;&#x3E;Success&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox custom-checkbox-color custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input bg-danger&#x22; id=&#x22;customCheck-33&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-33&#x22;&#x3E;Danger&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox custom-checkbox-color custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input bg-warning&#x22; id=&#x22;customCheck-44&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-44&#x22;&#x3E;Warning&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox custom-checkbox-color custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input bg-dark&#x22; id=&#x22;customCheck-55&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-55&#x22;&#x3E;Dark&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox custom-checkbox-color custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input bg-info&#x22; id=&#x22;customCheck-66&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-66&#x22;&#x3E; Info&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-11">
                           <label class="custom-control-label" for="customCheck-11">Primary </label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-success" id="customCheck-22">
                           <label class="custom-control-label" for="customCheck-22">Success</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-danger" id="customCheck-33">
                           <label class="custom-control-label" for="customCheck-33">Danger</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-warning" id="customCheck-44">
                           <label class="custom-control-label" for="customCheck-44">Warning</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-dark" id="customCheck-55">
                           <label class="custom-control-label" for="customCheck-55">Dark</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-info" id="customCheck-66">
                           <label class="custom-control-label" for="customCheck-66"> Info</label>
                        </div>
                     </div>
                  </div> 
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Change Icon</h4>
                        </div>
                     <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-checkbox-5" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-checkbox-5">
                           <div class="card"><kbd class="bg-dark"><pre id="change-icon" class="text-white"><code>
&#x3C;div class=&#x22;custom-control custom-checkbox checkbox-icon custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input&#x22; id=&#x22;customCheck-10&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-10&#x22;&#x3E;&#x3C;i class=&#x22;fa fa-music&#x22;&#x3E;&#x3C;/i&#x3E;Music&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox checkbox-icon custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input&#x22; id=&#x22;customCheck-20&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-20&#x22;&#x3E;&#x3C;i class=&#x22;fa fa-commenting-o&#x22;&#x3E;&#x3C;/i&#x3E;SMS&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox checkbox-icon custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input&#x22; id=&#x22;customCheck-30&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-30&#x22;&#x3E;&#x3C;i class=&#x22;fa fa-times&#x22;&#x3E;&#x3C;/i&#x3E;Cancel&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox checkbox-icon custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input&#x22; id=&#x22;customCheck-40&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-40&#x22;&#x3E;&#x3C;i class=&#x22;fa fa-file&#x22;&#x3E;&#x3C;/i&#x3E;File&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox checkbox-icon custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input&#x22; id=&#x22;customCheck-50&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-50&#x22;&#x3E;&#x3C;i class=&#x22;fa fa-bold&#x22;&#x3E;&#x3C;/i&#x3E;Bold&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox checkbox-icon custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input&#x22; id=&#x22;customCheck-60&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-60&#x22;&#x3E;&#x3C;i class=&#x22;fa fa-map-marker&#x22;&#x3E;&#x3C;/i&#x3E;Location&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox checkbox-icon custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input&#x22; id=&#x22;customCheck-70&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-70&#x22;&#x3E;&#x3C;i class=&#x22;fa fa-camera&#x22;&#x3E;&#x3C;/i&#x3E;Camera&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-10" checked="">
                           <label class="custom-control-label" for="customCheck-10"><i class="fa fa-music"></i>Music</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-20" checked="">
                           <label class="custom-control-label" for="customCheck-20"><i class="fa fa-commenting-o"></i>SMS</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-30" checked="">
                           <label class="custom-control-label" for="customCheck-30"><i class="fa fa-times"></i>Cancel</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-40" checked="">
                           <label class="custom-control-label" for="customCheck-40"><i class="fa fa-file"></i>File</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-50" checked="">
                           <label class="custom-control-label" for="customCheck-50"><i class="fa fa-bold"></i>Bold</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-60" checked="">
                           <label class="custom-control-label" for="customCheck-60"><i class="fa fa-map-marker"></i>Location</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-70" checked="">
                           <label class="custom-control-label" for="customCheck-70"><i class="fa fa-camera"></i>Camera</label>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Boolean Checkbox</h4>
                        </div>
                     <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-checkbox-6" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-checkbox-6">
                           <div class="card"><kbd class="bg-dark"><pre id="boolean-checkbox" class="text-white"><code>
&#x3C;div class=&#x22;custom-control custom-checkbox custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input&#x22; id=&#x22;customCheck-t&#x22; checked=&#x22;&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-t&#x22;&#x3E;True&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
&#x3C;div class=&#x22;custom-control custom-checkbox custom-control-inline&#x22;&#x3E;
   &#x3C;input type=&#x22;checkbox&#x22; class=&#x22;custom-control-input&#x22; id=&#x22;customCheck-f&#x22;&#x3E;
   &#x3C;label class=&#x22;custom-control-label&#x22; for=&#x22;customCheck-f&#x22;&#x3E;False&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-t" checked="">
                           <label class="custom-control-label" for="customCheck-t">True</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-f">
                           <label class="custom-control-label" for="customCheck-f">False</label>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
</x-app-layout>
