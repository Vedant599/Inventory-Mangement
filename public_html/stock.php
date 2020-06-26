						<div class="row">
				    		<div class="col-md-8">
				    			<div class="form-group">
						    		<select class="form-control" id="customer_name_for_reports">
						    			
						    		</select>
						    	</div>
				    		</div>	
				    		<div class="col-md-4">
				    			<div class="form-group">
						    		<select class="form-control" id="report_type">
						    			<option value="Due">Pending</option>
						    			<option value="Paid">Paid</option>
						    			<option value="All">All</option>
						    		</select>
						    	</div>
				    		</div>			
				    	</div>
				    	<div class="row">
				    		<div class="col-md-6">
				    			<div class="form-group">
				    				<label for="start_date_customer_reports">From</label>
						    		<input type="date" name="start_date_customer_reports" id="start_date_customer_reports" class="form-control" required>
						    	</div>
				    		</div>
				    		<div class="col-md-6">
				    			<div class="form-group">
				    				<label for="end_date_customer_reports">To</label>
						    		<input type="date" name="end_date_customer_reports" id="end_date_customer_reports" class="form-control" required>
						    	</div>
				    		</div>
				    	</div>
				    	<center>
				    		<button type="submit" class="btn btn-primary" style="width: 100%"><i class="fas fa-print"></i>&nbsp;Customer Reports</button>
				    	</center>