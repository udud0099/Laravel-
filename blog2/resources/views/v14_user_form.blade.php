<h1> this is user form </h1>

<div>
  <form action="v14_addUser" method="post">
    <!-- this is token for securety reason other wise give 419 PAGE EXPIRED -->
     @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="city" placeholder="city">
    <button>Add new user </button>
  </form>

</div>