<x-app-layout>
<div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="card">
                     <div class="card-body">
                    <p class="mb-0">SimpleD has extrend bootstrap alert component <a href="https://getbootstrap.com/docs/4.0/components/alerts/">Documentation</a></p>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 col-lg-12">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Basic Alerts</h4>
                        </div>
                        <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#alert-1" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="collapse" id="alert-1">
                           <div class="card"><kbd class="bg-dark"><pre id="basic-alert" class="text-white"><code>
&#x3C;div class=&#x22;alert alert-primary&#x22; role=&#x22;alert&#x22;&#x3E;
   &#x3C;div class=&#x22;iq-alert-text&#x22;&#x3E;A simple &#x3C;b&#x3E;primary&#x3C;/b&#x3E; alert&#x2014;check it out!&#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                        <div class="alert alert-primary" role="alert">
                           <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                           <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
                        </div>
                        <div class="alert alert-success" role="alert">
                           <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
                        </div>
                        <div class="alert alert-danger" role="alert">
                           <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
                        </div>
                        <div class="alert alert-warning" role="alert">
                           <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
                        </div>
                        <div class="alert alert-info" role="alert">
                           <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
                        </div>
                        <div class="alert alert-light mb-0" role="alert">
                           <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 col-lg-12">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Basic Alerts With Icons</h4>
                        </div>
                        <div class="header-action">
                           <i type="button" data-toggle="collapse" data-target="#alert-2" aria-expanded="false" aria-controls="alert-2">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="collapse" id="alert-2">
                           <div class="card"><kbd class="bg-dark"><pre id="basic-alert" class="text-white"><code>
&#x3C;div class=&#x22;alert alert-primary&#x22; role=&#x22;alert&#x22;&#x3E;
   &#x3C;div class=&#x22;iq-alert-text&#x22;&#x3E;A simple &#x3C;b&#x3E;primary&#x3C;/b&#x3E; alert&#x2014;check it out!&#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                        <div class="alert alert-primary" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-information-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
                        </div>
                        <div class="alert alert-success" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
                        </div>
                        <div class="alert alert-danger" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-information-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
                        </div>
                        <div class="alert alert-warning" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
                        </div>
                        <div class="alert alert-info" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-information-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
                        </div>
                        <div class="alert alert-light m-0" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12 col-lg-12">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Basic Line Alerts</h4>
                        </div>
                        <div class="header-action">
                           <i type="button" data-toggle="collapse" data-target="#alert-3" aria-expanded="false" aria-controls="alert-3">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="collapse" id="alert-3">
                           <div class="card"><kbd class="bg-dark"><pre id="basic-alert" class="text-white"><code>
&#x3C;div class=&#x22;alert alert-primary&#x22; role=&#x22;alert&#x22;&#x3E;
   &#x3C;div class=&#x22;iq-alert-text&#x22;&#x3E;A simple &#x3C;b&#x3E;primary&#x3C;/b&#x3E; alert&#x2014;check it out!&#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                        <div class="alert bg-white alert-primary" role="alert">
                           <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
                        </div>
                        <div class="alert bg-white alert-secondary" role="alert">
                           <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
                        </div>
                        <div class="alert bg-white alert-success" role="alert">
                           <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
                        </div>
                        <div class="alert bg-white alert-danger" role="alert">
                           <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
                        </div>
                        <div class="alert bg-white alert-warning" role="alert">
                           <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
                        </div>
                        <div class="alert bg-white alert-info" role="alert">
                           <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
                        </div>
                        <div class="alert bg-white alert-light mb-0" role="alert">
                           <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 col-lg-12">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Basic Line Alerts With Icons</h4>
                        </div>
                        <div class="header-action">
                           <i type="button" data-toggle="collapse" data-target="#alert-4" aria-expanded="false" aria-controls="alert-4">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="collapse" id="alert-4">
                           <div class="card"><kbd class="bg-dark"><pre id="basic-alert" class="text-white"><code>
&#x3C;div class=&#x22;alert alert-primary&#x22; role=&#x22;alert&#x22;&#x3E;
   &#x3C;div class=&#x22;iq-alert-text&#x22;&#x3E;A simple &#x3C;b&#x3E;primary&#x3C;/b&#x3E; alert&#x2014;check it out!&#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                        <div class="alert bg-white alert-primary" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
                        </div>
                        <div class="alert bg-white alert-secondary" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-information-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
                        </div>
                        <div class="alert bg-white alert-success" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
                        </div>
                        <div class="alert bg-white alert-danger" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-information-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
                        </div>
                        <div class="alert bg-white alert-warning" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
                        </div>
                        <div class="alert bg-white alert-info" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-information-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
                        </div>
                        <div class="alert bg-white alert-light mb-0" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12 col-lg-12">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Alerts With Background</h4>
                        </div>
                        <div class="header-action">
                           <i type="button" data-toggle="collapse" data-target="#alert-5" aria-expanded="false" aria-controls="alert-5">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="collapse" id="alert-5">
                           <div class="card"><kbd class="bg-dark"><pre id="basic-alert" class="text-white"><code>
&#x3C;div class=&#x22;alert alert-primary&#x22; role=&#x22;alert&#x22;&#x3E;
   &#x3C;div class=&#x22;iq-alert-text&#x22;&#x3E;A simple &#x3C;b&#x3E;primary&#x3C;/b&#x3E; alert&#x2014;check it out!&#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                        <div class="alert text-white bg-primary" role="alert">
                           <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
                        </div>
                        <div class="alert text-white bg-secondary" role="alert">
                           <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
                        </div>
                        <div class="alert text-white bg-success" role="alert">
                           <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
                        </div>
                        <div class="alert text-white bg-danger" role="alert">
                           <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
                        </div>
                        <div class="alert text-white bg-warning" role="alert">
                           <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
                        </div>
                        <div class="alert text-white bg-info" role="alert">
                           <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
                        </div>
                        <div class="alert bg-light mb-0" role="alert">
                           <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 col-lg-12">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Background Alerts With Icons</h4>
                        </div>
                        <div class="header-action">
                           <i type="button" data-toggle="collapse" data-target="#alert-6" aria-expanded="false" aria-controls="alert-6">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="collapse" id="alert-6">
                           <div class="card"><kbd class="bg-dark"><pre id="basic-alert" class="text-white"><code>
&#x3C;div class=&#x22;alert alert-primary&#x22; role=&#x22;alert&#x22;&#x3E;
   &#x3C;div class=&#x22;iq-alert-text&#x22;&#x3E;A simple &#x3C;b&#x3E;primary&#x3C;/b&#x3E; alert&#x2014;check it out!&#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                        <div class="alert text-white bg-primary" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
                        </div>
                        <div class="alert text-white bg-secondary" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-information-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
                        </div>
                        <div class="alert text-white bg-success" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
                        </div>
                        <div class="alert text-white bg-danger" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-information-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
                        </div>
                        <div class="alert text-white bg-warning" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
                        </div>
                        <div class="alert text-white bg-info" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-information-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
                        </div>
                        <div class="alert bg-light mb-0" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12 col-lg-12">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Alerts Dismissing</h4>
                        </div>
                        <div class="header-action">
                           <i type="button" data-toggle="collapse" data-target="#alert-7" aria-expanded="false" aria-controls="alert-7">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="collapse" id="alert-7">
                           <div class="card"><kbd class="bg-dark"><pre id="basic-alert" class="text-white"><code>
&#x3C;div class=&#x22;alert alert-primary&#x22; role=&#x22;alert&#x22;&#x3E;
   &#x3C;div class=&#x22;iq-alert-text&#x22;&#x3E;A simple &#x3C;b&#x3E;primary&#x3C;/b&#x3E; alert&#x2014;check it out!&#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                        <div class="alert text-white bg-primary" role="alert">
                           <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <i class="ri-close-line"></i>
                           </button>
                        </div>
                        <div class="alert text-white bg-secondary" role="alert">
                           <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <i class="ri-close-line"></i>
                           </button>
                        </div>
                        <div class="alert text-white bg-success" role="alert">
                           <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <i class="ri-close-line"></i>
                           </button>
                        </div>
                        <div class="alert text-white bg-danger" role="alert">
                           <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <i class="ri-close-line"></i>
                           </button>
                        </div>
                        <div class="alert text-white bg-warning" role="alert">
                           <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <i class="ri-close-line"></i>
                           </button>
                        </div>
                        <div class="alert text-white bg-info" role="alert">
                           <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <i class="ri-close-line"></i>
                           </button>
                        </div>
                        <div class="alert bg-light mb-0" role="alert">
                           <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
                           <button type="button" class="close text-muted" data-dismiss="alert" aria-label="Close">
                           <i class="ri-close-line"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-sm-12 col-lg-12">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Alerts Dismissing With Icons</h4>
                        </div>
                        <div class="header-action">
                           <i type="button" data-toggle="collapse" data-target="#alert-8" aria-expanded="false" aria-controls="alert-8">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="collapse" id="alert-8">
                           <div class="card"><kbd class="bg-dark"><pre id="basic-alert" class="text-white"><code>
&#x3C;div class=&#x22;alert alert-primary&#x22; role=&#x22;alert&#x22;&#x3E;
   &#x3C;div class=&#x22;iq-alert-text&#x22;&#x3E;A simple &#x3C;b&#x3E;primary&#x3C;/b&#x3E; alert&#x2014;check it out!&#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                        <div class="alert text-white bg-primary" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>primary</b> alert—check it out!</div>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <i class="ri-close-line"></i>
                           </button>
                        </div>
                        <div class="alert text-white bg-secondary" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-information-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>secondary</b> alert—check it out!</div>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <i class="ri-close-line"></i>
                           </button>
                        </div>
                        <div class="alert text-white bg-success" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>success</b> alert—check it out!</div>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <i class="ri-close-line"></i>
                           </button>
                        </div>
                        <div class="alert text-white bg-danger" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-information-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>danger</b> alert—check it out!</div>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <i class="ri-close-line"></i>
                           </button>
                        </div>
                        <div class="alert text-white bg-warning" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>warning</b> alert—check it out!</div>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <i class="ri-close-line"></i>
                           </button>
                        </div>
                        <div class="alert text-white bg-info" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-information-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>info</b> alert—check it out!</div>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <i class="ri-close-line"></i>
                           </button>
                        </div>
                        <div class="alert bg-light mb-0" role="alert">
                           <div class="iq-alert-icon">
                              <i class="ri-alert-line"></i>
                           </div>
                           <div class="iq-alert-text">A simple <b>light</b> alert—check it out!</div>
                           <button type="button" class="close text-muted" data-dismiss="alert" aria-label="Close">
                           <i class="ri-close-line"></i>
                           </button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-12">
                  <div class="card">
                     <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                           <h4 class="card-title">Additional content</h4>
                        </div>
                        <div class="header-action">
                           <i type="button" data-toggle="collapse" data-target="#alert-9" aria-expanded="false" aria-controls="alert-9">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="collapse" id="alert-9">
                           <div class="card"><kbd class="bg-dark"><pre id="basic-alert" class="text-white"><code>
&#x3C;div class=&#x22;alert alert-primary&#x22; role=&#x22;alert&#x22;&#x3E;
   &#x3C;div class=&#x22;iq-alert-text&#x22;&#x3E;A simple &#x3C;b&#x3E;primary&#x3C;/b&#x3E; alert&#x2014;check it out!&#x3C;/div&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12 col-lg-12">
                              <div class="alert alert-primary" role="alert">
                                 <div class="iq-alert-text">
                                    <h5 class="alert-heading">Well done!</h5>
                                    <p>Aww yeah, you successfully read this important alert message. This
                                       example text is going to run a bit longer so that you can see how
                                       spacing within an alert works with this kind of content.
                                    </p>
                                    <hr>
                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to
                                       keep things nice and tidy.
                                    </p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-sm-12 col-lg-12">
                              <div class="alert alert-success mb-0" role="alert">
                                 <div class="iq-alert-text">
                                    <h5 class="alert-heading">Well done!</h5>
                                    <p>Aww yeah, you successfully read this important alert message. This
                                       example text is going to run a bit longer so that you can see how
                                       spacing within an alert works with this kind of content.
                                    </p>
                                    <hr>
                                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to
                                       keep things nice and tidy.
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
</x-app-layout>
