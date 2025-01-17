<h1> this is user form </h1>

<div>
  <form action="v14_addUser" method="post">
    <!-- this is token for securety reason other wise give 419 PAGE EXPIRED -->
     @csrf

    <!-- <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="text" name="city" placeholder="city">
    <button>Add new user </button> -->
    <div>
      <h1>Skill</h1>
    <input type="checkbox" name="skill[]" value="PHP"  id="php"> <label for="php">php</label>
    <input type="checkbox" name="skill[]" value="Node"  id="node"> <label for="node">node</label>
    <input type="checkbox" name="skill[]" value="Java"  id="java"> <label for="java">java</label>
</div>
<br>
<div>
  <h1>Gender</h1>
<input type="radio" name="gender" value="male"  id="male"> <label for="male">male</label>
    <input type="radio" name="gender" value="female"  id="female"> <label for="female">female</label> 
</div>
<br>
<div>
  <h1>city</h1>
  <select name="city" >
    <option value="ktm">ktm</option>
    <option value="pok">pok</option>
    <option value="jan">jan</option>
  </select>
</div>

<div>
  <h1>age</h1>
  <input type="range" name="age" min="18" max="100">
</div>

<div>
  <button>Add new data</button>
</div>
  </form>

</div>