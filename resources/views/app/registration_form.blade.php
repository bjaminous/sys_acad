
<div class="container2">
    <form action="{{route ('register')}}" class="register-form" method="POST">
        @csrf
      <h2>Register course</h2>
      <p>Session :*</p>
      <select >
        <option value="">2020/2021</option>
        <option value="">2021/2022</option>
        <option value="">2022/2023</option>
        <option value="">2023/2024</option>
      </select>

      <p>Semester :*</p>
      <select>
        <option value="">First semester</option>
        <option value="">Second semester</option>
        <option value="">Third semester</option>
      </select>
      <br><br><button type="submit">Proceed</button>
    </form>
</div>
