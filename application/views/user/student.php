            <div class="row">
              <div class="span12">
                <h1>Administration Page</h1>
                <p class="lead">Welcome, <?php echo $user->username ?></p>
                <p>Choose one of the links from the menu to complete your tasks</p>
              </div>
            </div>
            <div class="row">
              <div class="span12">
                <h3 id="system-statistics">System Statistics</h3>
                <p>Number of users: <?php echo $users?></p>
                <p>Number of current rentals: <?php if ($futureRentals != null) echo $futureRentals; else echo "0"?></p>
                <p>Number of past rentals: <?php if ($pastRentals != null) echo $pastRentals; else echo "0"?></p>
              </div>
            </div>
        </div>