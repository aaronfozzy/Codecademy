<div class="row">
            
            <div class="col-md-3" class="series_img">
            <img class="img-responsive" ng-src="{{ listing.series_img }}">
            </div>
            
            <div class="col-md-6">
       <h1 class="series">{{ listing.series }}</h1>
       <h2 class="episode">{{ listing.episode }}</h2>
       <p class="description">{{ listing.description }}</p>
            </div>

            <div class="col-md-3">
              <ul class="list-group">
                <li class="list-group-item"><span>Date:</span>{{listing.datetime | date}}</li>
                <li class="list-group-item"><span>On air: {{listing.datetime | date:'EEEE'}}</span></li>
                <li class="list-group-item"><span>Time:</span>{{listing.datetime | date:"hh:mm a"}}</li>
                <li class="list-group-item"><span>Season:</span>{{listing.season}}</li>
                <li class="list-group-item"><span>Genre:</span>{{listing.genre}}</li>
              </ul>
            </div>
            
          </div>
