<div class="card shadow">
  <div class="card-header bg-primary text-white">
    <h3 class="card-title mb-0">My Profile</h3>
  </div>
  <div class="card-body">
    <p><strong>Name:</strong> <?= h($userData->username) ?></p>
    <p><strong>Email:</strong> <?= h($userData->email) ?></p>
  </div>
</div>
