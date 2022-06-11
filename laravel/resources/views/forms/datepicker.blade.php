<x-app-layout>
<div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Basic</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#datepicker-1" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="datepicker-1">
                           <div class="card"><kbd class="bg-dark"><pre id="datepicker-basic" class="text-white"><code>
&#x3C;div class=&#x22;form-group&#x22;&#x3E;
   &#x3C;label for=&#x22;exampleInputdate&#x22;&#x3E;Date Input&#x3C;/label&#x3E;
   &#x3C;input type=&#x22;date&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputdate&#x22; value=&#x22;2019-12-18&#x22;&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="form-group">
                        <label for="exampleInputdate">Date Input</label>
                        <input type="date" class="form-control" id="exampleInputdate" value="2019-12-18">
                     </div>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Month Date</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#datepicker-2" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="datepicker-2">
                           <div class="card"><kbd class="bg-dark"><pre id="datepicker-month-date" class="text-white"><code>
&#x3C;div class=&#x22;form-group&#x22;&#x3E;
   &#x3C;label for=&#x22;exampleInputmonth&#x22;&#x3E;Month Input&#x3C;/label&#x3E;
   &#x3C;input type=&#x22;month&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputmonth&#x22; value=&#x22;2019-12&#x22;&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="form-group">
                        <label for="exampleInputmonth">Month Input</label>
                        <input type="month" class="form-control" id="exampleInputmonth" value="2019-12">
                     </div>
                  </div>
               </div>            
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Time</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#datepicker-3" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="datepicker-3">
                           <div class="card"><kbd class="bg-dark"><pre id="datepicker-time" class="text-white"><code>
&#x3C;div class=&#x22;form-group&#x22;&#x3E;
   &#x3C;label for=&#x22;exampleInputtime&#x22;&#x3E;Time Input&#x3C;/label&#x3E;
   &#x3C;input type=&#x22;time&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputtime&#x22; value=&#x22;13:45&#x22;&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="form-group">
                        <label for="exampleInputtime">Time Input</label>
                        <input type="time" class="form-control" id="exampleInputtime" value="13:45">
                     </div>
                  </div>
               </div>
            
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Week</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#datepicker-4" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="datepicker-4">
                           <div class="card"><kbd class="bg-dark"><pre id="datepicker-week" class="text-white"><code>
&#x3C;div class=&#x22;form-group&#x22;&#x3E;
   &#x3C;label for=&#x22;exampleInputweek&#x22;&#x3E;Week Input&#x3C;/label&#x3E;
   &#x3C;input type=&#x22;week&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputweek&#x22; value=&#x22;2019-W46&#x22;&#x3E;
&#x3C;/div&#x3E; 
</code></pre></kbd></div>
                        </div>
                     <div class="form-group">
                     <label for="exampleInputweek">Week Input</label>
                     <input type="week" class="form-control" id="exampleInputweek" value="2019-W46">
                  </div> 
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Date and Time</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#datepicker-5" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="datepicker-5">
                           <div class="card"><kbd class="bg-dark"><pre id="datepicker-date-time" class="text-white"><code>
&#x3C;div class=&#x22;form-group&#x22;&#x3E;
   &#x3C;label for=&#x22;exampleInputdatetime&#x22;&#x3E;Date and Time Input&#x3C;/label&#x3E;
   &#x3C;input type=&#x22;datetime-local&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputdatetime&#x22; value=&#x22;2019-12-19T13:45:00&#x22;&#x3E;
&#x3C;/div&#x3E;
</code></pre></kbd></div>
                        </div>
                     <div class="form-group">
                        <label for="exampleInputdatetime">Date and Time Input</label>
                        <input type="datetime-local" class="form-control" id="exampleInputdatetime" value="2019-12-19T13:45:00">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</x-app-layout>
