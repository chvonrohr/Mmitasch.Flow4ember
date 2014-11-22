App.TasklistsIndexRoute = Ember.Route.extend({
  
  // force refresh data on query params
  queryParams: {
    page: { refreshModel: true },
    limit: { refreshModel: true },
    sort: { refreshModel: true }
  },

  model: function() {
    var offset = (params.page - 1) * params.limit;
    return this.session.query('tasklist', { limit: params.limit, offset:offset, sort: params.sort });
  }
});
