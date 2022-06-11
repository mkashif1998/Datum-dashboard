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
                           <i  type="button" data-toggle="collapse" data-target="#form-textarea-1" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-textarea-1">
                           <div class="card"><kbd class="bg-dark"><pre id="Default" class="text-white"><code>
&#x3C;div class=&#x22;form-group&#x22;&#x3E;
   &#x3C;label for=&#x22;exampleFormControlTextarea1&#x22;&#x3E;textarea&#x3C;/label&#x3E;
   &#x3C;textarea class=&#x22;form-control&#x22; id=&#x22;exampleFormControlTextarea1&#x22; rows=&#x22;3&#x22;&#x3E;&#x3C;/textarea&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="form-group mb-0">
                        <label for="exampleFormControlTextarea1">textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Horizontal Input</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-textarea-2" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-textarea-2">
                           <div class="card"><kbd class="bg-dark"><pre id="horizontal-input" class="text-white"><code>
&#x3C;div class=&#x22;form-group row align-items-center&#x22;&#x3E;
   &#x3C;div class=&#x22;col-sm-3 col-4&#x22;&#x3E;
      &#x3C;label class=&#x22;col-form-label&#x22;&#x3E;Description&#x3C;/label&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;col-sm-9 col-8&#x22;&#x3E;
      &#x3C;textarea class=&#x22;form-control&#x22; id=&#x22;horizontalTextarea&#x22; rows=&#x22;3&#x22; placeholder=&#x22;Textarea&#x22;&#x3E;&#x3C;/textarea&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="form-group mb-0 row align-items-center">
                        <div class="col-sm-3 col-4">
                           <label class="col-form-label">Description</label>
                        </div>
                        <div class="col-sm-9 col-8">
                           <textarea class="form-control" id="horizontalTextarea" rows="3" placeholder="Textarea"></textarea>
                        </div>
                     </div>
                  </div>
               </div>
            
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Floating Label</h4>
                     </div>
                   <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-textarea-3" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-textarea-3">
                           <div class="card"><kbd class="bg-dark"><pre id="floating-label" class="text-white"><code>
&#x3C;div class=&#x22;form-label-group&#x22;&#x3E;
   &#x3C;textarea class=&#x22;form-control&#x22; id=&#x22;exampleFormControlTextarea2&#x22; rows=&#x22;4&#x22;
      placeholder=&#x22;Label in Textarea&#x22;&#x3E;&#x3C;/textarea&#x3E;
   &#x3C;label&#x3E;Textarea&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="form-label-group mb-0">
                        <textarea class="form-control" id="exampleFormControlTextarea2" rows="4"
                           placeholder="Label in Textarea"></textarea>
                        <label>Textarea</label>
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Counter</h4>
                     </div>
                   <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-textarea-4" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-textarea-4">
                           <div class="card"><kbd class="bg-dark"><pre id="counter" class="text-white"><code>
&#x3C;div class=&#x22;form-label-group mb-0&#x22;&#x3E;
   &#x3C;textarea data-length=&#x22;20&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleFormControlTextarea3&#x22; rows=&#x22;3&#x22;
      placeholder=&#x22;Counter&#x22;&#x3E;&#x3C;/textarea&#x3E;
   &#x3C;label&#x3E;Counter&#x3C;/label&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="form-label-group mb-0">
                        <textarea data-length="20" class="form-control" id="exampleFormControlTextarea3" rows="3"
                           placeholder="Counter"></textarea>
                        <label>Counter</label>
                     </div>
                     <small class="counter-value-text float-right"><span class="char-count">0</span> / 20 </small>
                  </div>
               </div>
            </div>
         </div>
      </div>
</x-app-layout>
