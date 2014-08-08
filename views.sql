Create View sales_inv 
AS SELECT
 w_name,w_address,w_tel, w_gst, w_ntn, c_name, c_address, serial, inv_for, cmp_name, bill_num, ref_num, dscr, qunty, price, wght, amnt,sales_tax_tot, amnt_in_wrd, tot_amnt,sale_sess 
 FROM
 workplace a
        inner join
    sales b
        on a.id = b.inv_for
        inner join 
    company c
        on b.cmp_name = c.id




  ------------------------------------


  Create View ledger_rpt 
AS SELECT
 w_name,c_name, b.date, b.inv_for, b.cmp_name, ref_num, dscr, debit, credit, balance
 FROM
 workplace a
        inner join
    ledger b
        on a.id = b.inv_for
        inner join 
    company c
        on b.cmp_name = c.id
        inner join 
    sp_records d
        on b.id = d.id