<x-app-layout>
<div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Default</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-file-uploader-1" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-file-uploader-1">
                           <div class="card"><kbd class="bg-dark"><pre id="file-uploader-default" class="text-white"><code>
&#x3C;form action=&#x22;/action_page.php&#x22;&#x3E;
   &#x3C;p&#x3E;Custom file:&#x3C;/p&#x3E;
   &#x3C;div class=&#x22;custom-file mb-3&#x22;&#x3E;
      &#x3C;input type=&#x22;file&#x22; class=&#x22;custom-file-input&#x22; id=&#x22;customFile&#x22; name=&#x22;filename&#x22;&#x3E;
      &#x3C;label class=&#x22;custom-file-label&#x22; for=&#x22;customFile&#x22;&#x3E;Choose file&#x3C;/label&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;p&#x3E;Default file:&#x3C;/p&#x3E;
   &#x3C;input type=&#x22;file&#x22; id=&#x22;myFile&#x22; name=&#x22;filename2&#x22;&#x3E;
   &#x3C;div class=&#x22;mt-3&#x22;&#x3E;
      &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
   &#x3C;/div&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form action="/action_page.php">
                        <p>Custom file:</p>
                        <div class="custom-file mb-3">
                           <input type="file" class="custom-file-input" id="customFile" name="filename">
                           <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                        <p>Default file:</p>
                        <input type="file" id="myFile" name="filename2">
                        <div class="mt-3">
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                     </form>
                  </div>
               </div>
           
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title"> file input</h4>
                     </div>
                  <div class="header-action">
                           <i  type="button" data-toggle="collapse" data-target="#form-file-uploader-2" aria-expanded="false" aria-controls="alert-1">
                              <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="form-file-uploader-2">
                           <div class="card"><kbd class="bg-dark"><pre id="file-uploader-input" class="text-white"><code>
&#x3C;form id=&#x22;file-upload-form&#x22; class=&#x22;uploader-file&#x22;&#x3E;
   &#x3C;input id=&#x22;file-upload&#x22; type=&#x22;file&#x22; name=&#x22;fileUpload&#x22; accept=&#x22;image/*&#x22; /&#x3E;
   &#x3C;label id=&#x22;file-drag&#x22;&#x3E;
      &#x3C;img id=&#x22;file-image&#x22; src=&#x22;#&#x22; alt=&#x22;Preview&#x22; class=&#x22;hidden&#x22;&#x3E;
      &#x3C;span id=&#x22;start-one&#x22;&#x3E;
         &#x3C;i class=&#x22;fa fa-download&#x22; aria-hidden=&#x22;true&#x22;&#x3E;&#x3C;/i&#x3E;
         &#x3C;span class=&#x22;d-block&#x22;&#x3E;Select a file or drag here&#x3C;/span&#x3E;
         &#x3C;span id=&#x22;notimage&#x22; class=&#x22;hidden d-block&#x22;&#x3E;Please select image&#x3C;/span&#x3E;
         &#x3C;span id=&#x22;file-upload-btn&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Select a file&#x3C;/span&#x3E;
      &#x3C;/span&#x3E;
      &#x3C;span id=&#x22;response&#x22; class=&#x22;hidden&#x22;&#x3E;
      &#x3C;span id=&#x22;messages&#x22;&#x3E;&#x3C;/span&#x3E;
      &#x3C;progress class=&#x22;progress&#x22; id=&#x22;file-progress&#x22; value=&#x22;0&#x22;&#x3E;
         &#x3C;span&#x3E;0&#x3C;/span&#x3E;%
      &#x3C;/progress&#x3E;
      &#x3C;/span&#x3E;
   &#x3C;/label&#x3E;
&#x3C;/form&#x3E;
</code></pre></kbd></div>
                        </div>
                     <form id="file-upload-form" class="uploader-file ">
                        <input id="file-upload" type="file" name="fileUpload" accept="image/*" />
                        <label id="file-drag" class="mb-0">
                           <img id="file-image" src="#" alt="Preview" class="hidden">
                           <span id="start-one">
                              <i class="fa fa-download" aria-hidden="true"></i>
                              <span class="d-block">Select a file or drag here</span>
                              <span id="notimage" class="hidden d-block">Please select image</span>
                              <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                           </span>
                           <span id="response" class="hidden">
                           <span id="messages"></span>
                           <progress class="progress" id="file-progress" value="0">
                              <span>0</span>%
                           </progress>
                           </span>
                        </label>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
</x-app-layout>
