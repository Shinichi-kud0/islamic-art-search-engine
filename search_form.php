<style>
/* helpers/align.css */

.align {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

/* helpers/grid.css */

.grid {
  margin-left: auto;
  margin-right: auto;
  max-width: 320px;
  max-width: 20rem;
  width: 90%;
}

/* layout/base.css */

*,
*::before,
*::after {
  -webkit-box-sizing: inherit;
          box-sizing: inherit;
}

html {
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
  font-size: 100%;
  height: 100%;
}

body {
  background-color: #61646d;
  color: #000;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  font-family: "Open Sans", sans-serif;
  font-size: 14px;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5;
  margin: 0;
  min-height: 100vh;
}

/* modules/form.css */

::-webkit-input-placeholder {
  color: #42454e;
}

::-ms-input-placeholder {
  color: #42454e;
}

::placeholder {
  color: #42454e;
}

input {
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  border: none;
  font: inherit;
  margin: 0;
  outline: 0;
  padding: 0;
}

input[type="search"] {
  -webkit-appearance: textfield;
     -moz-appearance: textfield;
          appearance: textfield;
  -webkit-box-sizing: content-box;
          box-sizing: content-box;
}

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
          appearance: none;
}

input[type="submit"] {
  cursor: pointer;
}

.form__field {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.form__input {
  -webkit-box-flex: 1;
      -ms-flex-positive: 1;
          flex-grow: 1;
}

/* modules/search.css */

.search {
  background-color: #42454e;
  border-radius: 0.125rem;
  font-size: 12px;
  font-size: 0.75rem;
  padding: 8px;
  padding: 0.5rem;
}

.search input[type="search"],
.search input[type="submit"] {
  border-radius: 0.125rem;
}

.search input[type="search"] {
  background-color: #fff;
  color: #42454e;
  padding: 6px
    8px;
  padding: 0.375rem
    0.5rem;
}

.search input[type="submit"] {
  background-color: #1bba9a;
  color: #fff;
  font-weight: bold;
  margin-left: 8px;
  margin-left: 0.5rem;
  padding: 6px
    10px;
  padding: 0.375rem
    0.625rem;
}

.search input[type="submit"]:focus,
.search input[type="submit"]:hover {
  background-color: #189e83;
}
</style>


<body class="align">


                           
                             <form action="" method="get"  class="search">
                                 <div class="form__field">
                                    <input type="text" placeholder="Search Web" name="q" class="form__input" value="<?php echo stripslashes(@$cid); ?>">
                                   
                                   <div class="input-group-btn">
                                       <button class="fa fa-search button" type="submit">
                                       Search
                                       </button>
                                    </div>
                                 </div>
                              </form>
                           </div>



                           



  



  </div>

</body>
</html>
