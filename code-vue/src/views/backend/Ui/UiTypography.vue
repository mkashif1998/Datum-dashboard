<template>
  <b-container fluid>
    <b-row>
      <b-col sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Display headings</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-1>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-1" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="display-headings">
                    <code>
&lt;h1 class=&quot;display-1&quot;&gt;Display headings&lt;/h1&gt;
&lt;h1 class=&quot;display-2&quot;&gt;Display headings&lt;/h1&gt;
&lt;h1 class=&quot;display-3&quot;&gt;Display headings&lt;/h1&gt;
&lt;h1 class=&quot;display-4&quot;&gt;Display headings&lt;/h1&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Traditional heading elements are designed to work best in the meat of your page content. When you need a heading to stand out, consider using a <strong>display heading</strong>—a larger, slightly more opinionated heading style. Keep in mind these headings are not responsive by default, but it’s possible to enable <a href="https://getbootstrap.com/" target="_blank">responsive font sizes</a>.</p>
            <h1 class="display-1">Display headings</h1>
            <h1 class="display-2">Display headings</h1>
            <h1 class="display-3">Display headings</h1>
            <h1 class="display-4 mb-0">Display headings</h1>
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Typography</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-2>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-2" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="typography">
                    <code>
&lt;h1&gt;h1. Bootstrap heading&lt;/h1&gt;
&lt;h2&gt;h2. Bootstrap heading&lt;/h2&gt;
&lt;h3&gt;h3. Bootstrap heading&lt;/h3&gt;
&lt;h4&gt;h4. Bootstrap heading&lt;/h4&gt;
&lt;h5&gt;h5. Bootstrap heading&lt;/h5&gt;
&lt;h6 class=&quot;mb-0&quot;&gt;h6. Bootstrap heading&lt;/h6&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code>, are available.</p>
            <h1>h1. Bootstrap heading</h1>
            <h2>h2. Bootstrap heading</h2>
            <h3>h3. Bootstrap heading</h3>
            <h4>h4. Bootstrap heading</h4>
            <h5>h5. Bootstrap heading</h5>
            <h6 class="mb-0">h6. Bootstrap heading</h6>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Inline text elements</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-3>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-3" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="inline-text-element">
                    <code>
&lt;p&gt;Styling for common inline HTML5 elements.&lt;/p&gt;
&lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;
&lt;p&gt;&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;&lt;/p&gt;
&lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;&lt;/p&gt;
&lt;p&gt;&lt;u&gt;This line of text will render as underlined&lt;/u&gt;&lt;/p&gt;
&lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Styling for common inline HTML5 elements.</p>
            <p>You can use the mark tag to <mark>highlight</mark> text.</p>
            <p><del>This line of text is meant to be treated as deleted text.</del></p>
            <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
            <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
            <p><u>This line of text will render as underlined</u></p>
            <p><small>This line of text is meant to be treated as fine print.</small></p>
            <p><strong>This line rendered as bold text.</strong></p>
            <p><em>This line rendered as italicized text.</em></p>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Lists Inline</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-4>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-4" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="lists-inline">
                    <code>
&lt;ul class=&quot;list-inline&quot;&gt;
   &lt;li class=&quot;list-inline-item&quot;&gt;Lorem ipsum&lt;/li&gt;
   &lt;li class=&quot;list-inline-item&quot;&gt;Phasellus iaculis&lt;/li&gt;
   &lt;li class=&quot;list-inline-item&quot;&gt;Nulla volutpat&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Remove a list’s bullets and apply some light <code>margin</code> with a combination of two classes, <code>.list-inline</code> and <code>.list-inline-item</code>.</p>
            <ul class="list-inline">
              <li class="list-inline-item">Lorem ipsum</li>
              <li class="list-inline-item">Phasellus iaculis</li>
              <li class="list-inline-item">Nulla volutpat</li>
            </ul>
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Headings</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-5>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-5" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="headings">
                    <code>
&lt;p class=&quot;h1 mb-3&quot;&gt;h1. Bootstrap heading&lt;/p&gt;
&lt;p class=&quot;h2 mb-3&quot;&gt;h2. Bootstrap heading&lt;/p&gt;
&lt;p class=&quot;h3 mb-3&quot;&gt;h3. Bootstrap heading&lt;/p&gt;
&lt;p class=&quot;h4 mb-3&quot;&gt;h4. Bootstrap heading&lt;/p&gt;
&lt;p class=&quot;h5 mb-3&quot;&gt;h5. Bootstrap heading&lt;/p&gt;
&lt;p class=&quot;h6 mb-0&quot;&gt;h6. Bootstrap heading&lt;/p&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p><code>.h1</code> through <code>.h6</code> classes are also available, for when you want to match the font styling of a heading but cannot use the associated HTML element.</p>
            <p class="h1 mb-3">h1. Bootstrap heading</p>
            <p class="h2 mb-3">h2. Bootstrap heading</p>
            <p class="h3 mb-3">h3. Bootstrap heading</p>
            <p class="h4 mb-3">h4. Bootstrap heading</p>
            <p class="h5 mb-3">h5. Bootstrap heading</p>
            <p class="h6 mb-0">h6. Bootstrap heading</p>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Lists Unstyled</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-6>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-6" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="lists-unstyled">
                    <code>
&lt;ul class=&quot;list-unstyled&quot;&gt;
   &lt;li&gt;Lorem ipsum dolor sit amet&lt;/li&gt;
   &lt;li&gt;Consectetur adipiscing elit&lt;/li&gt;
   &lt;li&gt;Integer molestie lorem at massa&lt;/li&gt;
   &lt;li&gt;Facilisis in pretium nisl aliquet&lt;/li&gt;
   &lt;li&gt;
      Nulla volutpat aliquam velit
      &lt;ul&gt;
         &lt;li&gt;Phasellus iaculis neque&lt;/li&gt;
         &lt;li&gt;Purus sodales ultricies&lt;/li&gt;
         &lt;li&gt;Vestibulum laoreet porttitor sem&lt;/li&gt;
         &lt;li&gt;Ac tristique libero volutpat at&lt;/li&gt;
      &lt;/ul&gt;
   &lt;/li&gt;
   &lt;li&gt;Faucibus porta lacus fringilla vel&lt;/li&gt;
   &lt;li&gt;Aenean sit amet erat nunc&lt;/li&gt;
   &lt;li&gt;Eget porttitor lorem&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Remove the default <code>list-style</code> and left margin on list items (immediate children only). <strong>This only applies to immediate children list items</strong>, meaning you will need to add the class for any nested lists as well.</p>
            <ul class="list-unstyled">
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipiscing elit</li>
                <li>Integer molestie lorem at massa</li>
                <li>Facilisis in pretium nisl aliquet</li>
                <li>
                    Nulla volutpat aliquam velit
                    <ul>
                      <li>Phasellus iaculis neque</li>
                      <li>Purus sodales ultricies</li>
                      <li>Vestibulum laoreet porttitor sem</li>
                      <li>Ac tristique libero volutpat at</li>
                    </ul>
                </li>
                <li>Faucibus porta lacus fringilla vel</li>
                <li>Aenean sit amet erat nunc</li>
                <li>Eget porttitor lorem</li>
              </ul>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Blockquotes</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line" v-b-toggle.collapse-7>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-7" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="blockquotes">
                    <code>
&lt;blockquote class=&quot;blockquote&quot;&gt;
   &lt;p class=&quot;mb-0&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
   &lt;footer class=&quot;blockquote-footer&quot;&gt;Someone famous in &lt;cite title=&quot;Source Title&quot;&gt;Source Title&lt;/cite&gt;&lt;/footer&gt;
&lt;/blockquote&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>For quoting blocks of content from another source within your document. Wrap <code>&lt;blockquote class="blockquote"&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote.</p>
            <blockquote class="blockquote">
              <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
            </blockquote>
          </template>
        </card>
      </b-col>
      <b-col sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Description list alignment</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line"  v-b-toggle.collapse-8>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-8" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="description-list-alignment">
                    <code>
&lt;dl class=&quot;row&quot;&gt;
   &lt;dt class=&quot;col-sm-3&quot;&gt;Description lists&lt;/dt&gt;
   &lt;dd class=&quot;col-sm-9&quot;&gt;A description list is perfect for defining terms.&lt;/dd&gt;
   &lt;dt class=&quot;col-sm-3&quot;&gt;Euismod&lt;/dt&gt;
   &lt;dd class=&quot;col-sm-9&quot;&gt;
      &lt;p&gt;Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.&lt;/p&gt;
      &lt;p&gt;Donec id elit non mi porta gravida at eget metus.&lt;/p&gt;
   &lt;/dd&gt;
   &lt;dt class=&quot;col-sm-3&quot;&gt;Malesuada porta&lt;/dt&gt;
   &lt;dd class=&quot;col-sm-9&quot;&gt;Etiam porta sem malesuada magna mollis euismod.&lt;/dd&gt;
   &lt;dt class=&quot;col-sm-3 text-truncate&quot;&gt;Truncated term is truncated&lt;/dt&gt;
   &lt;dd class=&quot;col-sm-9&quot;&gt;Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.&lt;/dd&gt;
   &lt;dt class=&quot;col-sm-3&quot;&gt;Nesting&lt;/dt&gt;
   &lt;dd class=&quot;col-sm-9&quot;&gt;
      &lt;dl class=&quot;row&quot;&gt;
         &lt;dt class=&quot;col-sm-4&quot;&gt;Nested definition list&lt;/dt&gt;
         &lt;dd class=&quot;col-sm-8&quot;&gt;Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.&lt;/dd&gt;
      &lt;/dl&gt;
   &lt;/dd&gt;
&lt;/dl&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Align terms and descriptions horizontally by using our grid system’s predefined classes (or semantic mixins). For longer terms, you can optionally add a <code>.text-truncate</code> class to truncate the text with an ellipsis.</p>
            <dl class="row">
              <dt class="col-sm-3">Description lists</dt>
              <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
              <dt class="col-sm-3">Euismod</dt>
              <dd class="col-sm-9">
                <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                <p>Donec id elit non mi porta gravida at eget metus.</p>
              </dd>
              <dt class="col-sm-3">Malesuada porta</dt>
              <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
              <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
              <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
              <dt class="col-sm-3">Nesting</dt>
              <dd class="col-sm-9">
                <dl class="row">
                  <dt class="col-sm-4">Nested definition list</dt>
                  <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                </dl>
              </dd>
            </dl>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: 'UiTypography',
}
</script>
