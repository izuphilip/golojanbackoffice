














<!-- Deposit Action Sheet -->
<div class="modal fade action-sheet" id="depositActionSheet" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Balance</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                    <form>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="account1">From</label>
                                <select class="form-control custom-select" id="account1">
                                    <option value="0">Savings (*** 5019)</option>
                                    <option value="1">Investment (*** 6212)</option>
                                    <option value="2">Mortgage (*** 5021)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <label class="label">Enter Amount</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="input2">$</span>
                                </div>
                                <input type="text" class="form-control form-control-lg" value="100">
                            </div>
                        </div>


                        <div class="form-group basic">
                            <button type="button" class="btn btn-primary btn-block btn-lg" data-dismiss="modal">Deposit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Deposit Action Sheet -->


<!-- Withdraw Action Sheet -->
<div class="modal fade action-sheet" id="withdrawActionSheet" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Withdraw</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                    <form>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="account2d">From</label>
                                <select class="form-control custom-select" id="account2d">
                                    <option value="0">Savings (*** 5019)</option>
                                    <option value="1">Investment (*** 6212)</option>
                                    <option value="2">Mortgage (*** 5021)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="text11d">To</label>
                                <input type="email" class="form-control" id="text11d" placeholder="Enter IBAN">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <label class="label">Enter Amount</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="input14d">$</span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="0">
                            </div>
                        </div>

                        <div class="form-group basic">
                            <button type="button" class="btn btn-primary btn-block btn-lg" data-dismiss="modal">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Withdraw Action Sheet -->

<!-- Send Action Sheet -->
<div class="modal fade action-sheet" id="sendActionSheet" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send Money</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                    <form>
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="account2">From</label>
                                <select class="form-control custom-select" id="account2">
                                    <option value="0">Savings (*** 5019)</option>
                                    <option value="1">Investment (*** 6212)</option>
                                    <option value="2">Mortgage (*** 5021)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <label class="label" for="text11">To</label>
                                <input type="email" class="form-control" id="text11" placeholder="Enter bank ID">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <label class="label">Enter Amount</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="input14">$</span>
                                </div>
                                <input type="text" class="form-control form-control-lg" placeholder="0">
                            </div>
                        </div>

                        <div class="form-group basic">
                            <button type="button" class="btn btn-primary btn-block btn-lg" data-dismiss="modal">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Send Action Sheet -->

<!-- Exchange Action Sheet -->
<div class="modal fade action-sheet" id="exchangeActionSheet" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Exchange</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                    <form>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="currency1">From</label>
                                        <select class="form-control custom-select" id="currency1">
                                            <option value="1">EUR</option>
                                            <option value="2">USD</option>
                                            <option value="3">AUD</option>
                                            <option value="4">CAD</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="currency2">To</label>
                                        <select class="form-control custom-select" id="currency2">
                                            <option value="1">USD</option>
                                            <option value="1">EUR</option>
                                            <option value="2">AUD</option>
                                            <option value="3">CAD</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <label class="label">Enter Amount</label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="input1">$</span>
                                </div>
                                <input type="text" class="form-control form-control-lg" value="100">
                            </div>
                        </div>



                        <div class="form-group basic">
                            <button type="button" class="btn btn-primary btn-block btn-lg" data-dismiss="modal">Deposit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- * Exchange Action Sheet -->